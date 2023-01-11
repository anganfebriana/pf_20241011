<?php 
// cek tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {

  // cek username & password
  if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
  
    // jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;

  } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  
<?php if( isset($error) ) : ?>
  <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>
<form action="" method="post">

 <div class="login">
    <h2> Form Login </h2>
    <div class="input-group">
        <input type="text" name="username" id="username">
        <span> Username </span>
    </div>
    <div class ="input-group">
        <input type="password" name="password" id="password">
    <span>Password</span>
</div>

<div class="input-group">
<button type="submit" name="submit">Login</button>
</div>
</form>

</body>

<footer><p class="mt-5 mb mb-3 text-muted"> Angan febriana &copy; 2023</p></footer>
</html>