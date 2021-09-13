<?php
  $global = "Global Variable"; // Global Scope Variable

  function myFunc() {
    $local = "Local Variable"; //Local Scope Variable
    echo $local;
  }
  echo $global;
?>
