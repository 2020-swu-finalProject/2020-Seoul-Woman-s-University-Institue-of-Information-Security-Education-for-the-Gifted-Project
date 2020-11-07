# 2020-Seoul-Metropolitan-Government-Information-Security-Agency-Project
서울여자대학교 정보보호 영재원 프로젝트(2020-11-07)를 진행하였습니다.<br/>
주제는 웹과 웹 취약점에 대해 진행했으며, 본 코드는 웹 취약점에 대한 코드입니다.<br/>

# 취약점 목록
[![test_link_picture](https://img.shields.io/badge/Test-link-00AAFF?style=for-the-badge)](https://yhs.kr/Project_2020/)<br/>
위 테스트 링크는 아래의 취약점을 직접 구현해 보았습니다. ~~참고로 보안을 떨어트리는게 더 어렵습니다. ㅎㅎ~~
## XSS (CRoss Site Scripting) - 반응형
공격자가 조작된 URL를 전송합니다. 이 URL안에는 스크립트가 들어있습니다. ex.) ```<script>alert("Hello");</script>```<br/>
피해자는 이 조작된 URL를 통해 악성스크립트를 다운로드를 받게 됩니다.<br/>

위 XSS 피해를 저희는 ```htmlspecialchars($command);```를 통해서 막았습니다.<br/>

## SQL injection
SQL 인젝션은 ```"or"1"="1```를 통하여 허락 없이 관리자 권한과 비슷한 권한을 얻는것을 말합니다.<br/>
위 SQL 인젝션을 악용하여, 타인의 ID나 비밀번호를 가져올 수도 있으며, 관리자 권한이 들어있는 계정을 함부로 접근할 수 있습니다.<br/>

위 테스트 링크를 통해 SQL 인젝션을 체험해 보실 수 있으며, 아이디는 admin, 비밀번호는 1234입니다.<br/>
아래의 방법을 통해 SQL 인젝션을 시도해보실 수 있으며, 수 많은 방법으로 SQL 인젝션을 체험해 보실 수 있습니다.<br/>
**<아이디 창에 SQL 인젝션 시도>**
* admin' #
* admin' or '1' = '1

**<비밀번호 창에 SQL 인젝션 시도>**
* ' or '1' = '1

저희는 이중 검증을 통하여 값을 비교하였고 정상적으로 작동하는 것을 알 수 있습니다. <br/>
```if ($id == $row['id'] && $password == $row['pw']) {}```
