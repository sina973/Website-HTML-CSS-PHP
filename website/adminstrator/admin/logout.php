<?php
session_start();
$_SESSION['admin']=null;
$_SESSION['wrong']=null;
header("location:login.php");