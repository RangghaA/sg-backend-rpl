
<?php
  if (isset($_POST['login'])) {

  $u = 'fulana';
  $p = '1234';

  $username= $_POST['username'];
  $password = $_POST['password'];

  if($username == $u && $password == $p){
  	echo "login berhasil";
  }else{
  	echo "login gagal";
  }
}
?>
<form action='form.php' method="POST">
   USERNAME= <input type="text" name="username"> <br/>
   PASSWORD= <input type="password" name="password"> <br/>
   <button type="submit" name="login"> Login </button>
</form>