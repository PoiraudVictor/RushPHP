<?php
session_start();
if ($_POST["login"] === "admin" && $_POST["passwd"] === "tonton" && $_POST["submit"] && $_POST["submit"] === "OK") {
    header('Location: admin.html');
}
else
    //integration Front 
?>
