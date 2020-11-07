<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="static/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="static/css/index.css">
        <style>
            .container{
                position:absolute; 
                top:50%; left:50%;
                margin-top:-100px; margin-left:-100px; 
                width:200px; height:200px; 
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7289da;">
            <a class="navbar-brand" href="/Project_2020/">서울여대 정보보호 영재원 프로젝트</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Project_2020/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Another Example
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Project_2020/XSS.php">XSS<span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="/Project_2020/SQL_injection.php">SQL injection</a>
                    <a class="dropdown-item" href="/Project_2020/SQL_es_injection.php">SQL Escape String injection</a>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-item">Hello World!</span>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <form action="/Project_2020/XSS_upload.php" method="get">
                <input type="text" class="form-control" name="command" placeholder="command" style="width:300px">
                <input value="보내기" class="btn btn-success" type="submit">
            </form>
        </div>
    </body>
</html>