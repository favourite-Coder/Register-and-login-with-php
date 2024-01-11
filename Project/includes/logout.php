<?php

session_start();
require_once 'database.php';

//DESTORY ALL SESSION AND REDIRECT USER TO HOME PAGE

session_destroy();
header('Location: ../index.php');
die();