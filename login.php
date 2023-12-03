<?php
// Replace 'your_username' and 'your_password' with the actual username and password
$validUsername = 'RDC';
$validPassword = 'sleeprdc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === $validUsername && $password === $validPassword) {
    // Start a session to store the authenticated state
    session_start();
    $_SESSION['authenticated'] = true;
    header('Location: private.php');
    exit;
  } else {
    echo 'Invalid username or password. Please try again.';
  }
}
?>
