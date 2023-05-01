<?php
session_start();
echo "Favorite color is " . $_SESSION["user"] . ".<br>";
echo "Favorite color is " . $_SESSION["users"] . ".<br>";
echo "Favorite color is " . $_SESSION["username"] . ".<br>";