<?php
session_start();

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
  // Redirect to <link>main.html</link> upon successful authentication
  header('Location: main.html');
  exit;
} else {
  // If not authenticated, redirect to <link>index.html</link>
  header('Location: index.html');
  exit;
}
?>
