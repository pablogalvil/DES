<?php
use App\utils\Utils;
session_start();
session_unset();
session_destroy();
Utils::redirect('/');
exit;
?>