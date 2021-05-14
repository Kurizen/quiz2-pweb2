<?php 
session_start();

require_once "Validate.php";

if(!$isLoggedIn) {
    header("Location: ./");
}
?>
<style>
.member-dashboard {
    text-align: center;
    padding: 40px;
    background: #00000;
    color: #555;
    border-radius: 4px;
    display: inline-block;
}

.member-dashboard a {
    color: #09F;
    text-decoration: none;
}
</style>
<div class="member-dashboard">
    Berhasil Masuk.<br>
    <a href="logout.php">Logout</a><br>
    <a href="https://jojo.fandom.com/wiki/The_World">DUNIA</a>
</div>