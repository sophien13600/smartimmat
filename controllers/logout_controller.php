<?php
session_start();
session_destroy();
header('Location: /smartimmat/index.php');
exit();
