<?php
    $json_string = file_get_contents("data.json");
    $row = json_decode($json_string,true);
    $IP = $row['network'];
    $ID = $row['user'];
    $PASSWORD = $row['password'];
    $DATABASE = $row['database'];
    $PORT = $row['port'];

    session_start(); // 세션
    $id = $_POST['id']; // 아이디
    $pw = $_POST['pw']; // 패스워드

    $conn = mysqli_connect($IP,$ID,$PASSWORD,$DATABASE,$PORT);
    $query = "select * from user where id='$id' and password='$pw'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
    if(isset($row['id']) && isset($row['password'])){ // id와 pw가 맞다면 login
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = "어드민";
        echo "<script>location.href='SQL_injection.php';</script>";
    }else{ // id 또는 pw가 다르다면 login 폼으로
        //$debug_pw = $row['id'];
        echo "<script>console.log(\"$query\");</script>"; // 잘못된 아이디 또는 비빌번호 입니다
        echo "<script>window.alert('invalid username or password');</script>";
        echo "<script>location.href='SQL_injection.php';</script>";
    }
?>