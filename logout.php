<?php
// sesstion start
session_start();

// session value unset
session_unset();

// session destroy
session_destroy();

header("Location: index.php");