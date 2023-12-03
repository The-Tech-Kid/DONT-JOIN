<?php
session_start();

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
  // Display the private content here
  echo 'Welcome to the private area!';
} else {
  header('Location: index.html');
  exit;
}
?>