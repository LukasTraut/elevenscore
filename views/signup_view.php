<?php
require 'models/signup_modle.php';
?>

<h1>Registrieren</h1>
<form method="POST">
    <label for="username">Benutzername</label>
    <input id= "username" name= "username" type="text" placeholder="Username"><br>
    <label>Passwort</label>
    <input id= "password" name= "password" type="password"><br>
    <button type="submit">Signup</button>
</form>