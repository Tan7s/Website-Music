<?php
 session_start();
 if(isset($_SESSION['username']))
 {
  unset($_SESSION['username']);
  session_destroy();
 }
 header("Location: http://localhost:7979/music-thayhoang-test/?UI=trang_chu");
?>