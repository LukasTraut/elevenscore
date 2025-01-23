<?php
require 'models/login_modle.php';
?>

<h1>Login</h1>

<form method="POST">
    <label for="username">Username</label>
    <input id= "username" name= "username" type="text" placeholder="Username" ><br>
    <label>Passwort</label>
    <input id= "password" name= "password" type="password"><br>
    <button type="submit">Anmelden</button>
</form>

<p>Noch kein Login? <a href="signup">» Hier registrieren.</a>

</p>