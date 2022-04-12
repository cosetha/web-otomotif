<?php
$conn = new mysqli('localhost', 'root', 'aberoa','pemweb-2022');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

