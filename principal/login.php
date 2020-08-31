<?php require_once '../include/header.php'; ?>
<body>
    <div class="login-box">
      <img src="../images/logo.png" class="avatar" alt="Avatar Image"/>
      
      <h1>Login Here</h1>
      
      <?php if(isset($_SESSION['error-login'])): ?>
      <div class="alerta-error">
            <?=$_SESSION['error-login'];?>
      </div>
      <?php endif; ?>
      
      <form id="formulario" action="loginUser.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" name="mail" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Log In">
        <a href="">Lost your Password?</a><br>
        <a href="RegistroUsuarios.php">Don't have An account?</a>
      </form>
    </div>
  </body>
</html>

