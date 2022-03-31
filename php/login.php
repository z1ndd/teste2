<?php   $title = 'Inserir Utilizador';
        $currentPage = 'inserir-utilizador';
        include('../elements/head.php');
        include('../elements/navbar.php'); ?>
<body>
<?php
    require('ligacaoBD.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        $login = stripslashes($_REQUEST['login']);    // removes backslashes
        $login = mysqli_real_escape_string($liga, $login);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($liga, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `utilizador` WHERE login='$login'
                     AND password='$password'";
        $result = mysqli_query($liga, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['login'] = $login;
            // Redirect to user dashboard page
            header("Location: ../index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect login/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<center>
    <form class="col-md-6 w-50" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="login" placeholder="Login" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registo.php">Novo Registo</a></p>
  </form>
</center>
<?php
    }
?>
</body>
</html>