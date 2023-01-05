<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>php로그인</title>
    </br>admin계정에 로그인 하는 방법?</br>
    <?php
    
    if(isset($_POST['uid'])&&isset($_POST['pwd'])){
        $username=$_POST['uid'];
        $userpw=$_POST['pwd'];

        $conn= mysqli_connect('localhost', 'root', '' ,'islab_test') or die(mysql_error()) ;
       
        $sql="SELECT * FROM islab_test where login_id='$username' and login_pw='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
            echo "</br>ISLAB{NewJeans_hypeboy}";
        }
        else{
            echo "login fail";
        }
    }
    ?>
</head>
  <body>
    <form  method="post">
      로그인</br>
      아이디 : <input type="text" name="uid" /></br>
      비밀번호 : <input type="password" name="pwd" /></br>
      <input type="submit" value="로그인" />
    </form>
  </body>
</html>