<?php

declare(strict_types=1);

session_start();
session_destroy();
header('Location: http://localhost:8000/index.php');
