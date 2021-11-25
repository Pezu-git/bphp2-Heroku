<?php

declare(strict_types=1);

session_start();

$_SESSION['name'] = $_POST['name'];

header('Location: http://localhost:8000/index.php');
