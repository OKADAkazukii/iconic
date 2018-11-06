<html>
<head>
 <title>Login Form</title>
</head>
<body>
<br>
<div>

<?php foreach($users as $user)
  {
  echo $user->name.'<br>'.$user->email;
  }
?>

  <h2>Login Form</h2>
  <form action="index.php" method="post">
  <br>
  <div>
    <div>UserName</div>
    <input type="text" name="username" maxlength="12"/><br>
    <div>Password</div>
    <input type="password" name="password" maxlength="20"/><br>
    <br>
    <input type="submit" value="Login">
  </div>
  <br><br><br><br><br><br><br><br>
  <p class="link1"><a href="/new.html">Click here</a> if you do not have an account</p>
</form>
</div>
</body>
</html>
