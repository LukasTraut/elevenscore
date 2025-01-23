<?php
require 'models/add_modle.php';
?>


<h1>Neue News erfassen</h1>

<form method="POST">
    <label for="name">Namen eingeben:</label><br>
    <input id="name" name="name" value="<?= $_SESSION["liau"]?>"readonly></textarea><br><br>     
    <label for="title">Titel eingeben:</label><br>
    <input id="title" name="title"></textarea><br><br>
    <label for="news">Neue News eingeben:</label><br>
    <textarea id="news" name="news" rows="6" cols="40" ></textarea><br><br>
    <label for="pic">Bildlink:</label><br>
    <input id="pic" name="pic"></textarea><br><br>
    <button type="submit">News hinzufügen</button>
</form>