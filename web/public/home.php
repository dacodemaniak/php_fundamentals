<?php
session_start();

if (!array_key_exists("id", $_SESSION)) {
    header("Location: index.php");
} else {
  include("./views/signoff.php");
}

