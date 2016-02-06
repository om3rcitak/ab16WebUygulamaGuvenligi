<?php

require "inc/conn.php";

session_destroy();

header("Location: index.php");

?>