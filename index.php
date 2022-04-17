<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>


<body>
    <div class="wss">
        <section class="form registro">
        <header>Chat Registro</header>
        <form action="registros.php" method="POST">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Nombre</label>
                    <input type="text" name="fname" placeholder="Nombre" required>
                </div>
                <div class="field input">
                    <label>Apellido</label>
                    <input type="text" name="lname" placeholder="Apellido" required>
                </div>
                </div>
                <div class="field input">
                    <label>Correo Electronico</label>
                    <input type="text" name="email" placeholder="Introdusca tu correo electronico" required>
                </div>
                <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Introduzca nueva contraseña" required>
        <!--  <i class="fas fa-eye"></i> -->
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar">
        </div> 
        </form>
        <div class="link">Ya te inscribiste? <a href="login.php">Inicia sesión ahora</a></div>
        </section>
    </div>
</body>