<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat login</header>
      <form action="mode/login.php" method="POST" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Dirección de correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
       <!--   <i class="fas fa-eye"></i> -->
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar ">
        </div>
      </form>
      <div class="link">Aún no te has registrado? <a href="index.php">Regístrate ahora</a></div>
    </section>
  </div>
  
  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>

</body>
</html>
