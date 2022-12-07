<html>
    <head>
        <title> Gedung Aghnia </title>
        <link href="library/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="styles/styles.css" rel="stylesheet"/>
    </head>
    
    <body>
         <?php
        include "nav.php";
        ?>

     <!-- Start build Login Form -->
    <div class=login-form>
        <form action="form-action/loginact.php" method="POST" class="form-horizontal">
        <fieldset>
        <div class ="tengah"><legend>Login</legend></div>
        <label for ="Email">Email</label>
        <input type = "text" placeholder="Enter Email" name="email" size="40px"/> <br> <br>
        <label for ="Password">Password</label>
        <input type = "password" placeholder="Enter Password" name="password" required size="50"/> <br><br>

        <button type="submit" class="btn btn-success">Login</button>
            <br/>
       <a class="login-newuser" href="register.php">Tidak punya akun?</a>
      <a style="position:absolute; left:20; bottom:10; color:white;" href="loginadmin.php">Login Admin</a>
      </div>
    </form>
        </fieldset>
        <script src="scroll.js"></script>
    </body>
</html>