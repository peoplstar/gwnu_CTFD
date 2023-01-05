<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>php로그인</title>
    </br>admin 계정의 비빌번호를 탈취하라!</br>
    <?php
    
    if(isset($_POST['uid'])&&isset($_POST['pwd'])){
        $username=$_POST['uid'];
        $userpw=$_POST['pwd'];

        $conn= mysqli_connect('localhost', 'root', '' ,'islab_test') or die(mysql_error()) ;
       
        $sql="SELECT * FROM islab_test where login_id='$username' and login_pw='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
            echo "</br>i want password";
        }
        else{
            echo "no";
        }
    }
    ?>
</head>
  <body>
    <form  method="post">
      로그인</br>
      아이디 : <input type="text" name="uid" /></br>
      비밀번호 : <input type="text" name="pwd" /></br>
      <input type="submit" value="로그인" />
    </form>
  </body>
</html>