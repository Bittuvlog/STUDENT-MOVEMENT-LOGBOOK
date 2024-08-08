<?php
session_start();
session_destroy();
header('location:index.php?ms=2');
?>