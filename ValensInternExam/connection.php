<?php
$conn = new PDO('mysql:host=localhost;dbname=exam','root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>