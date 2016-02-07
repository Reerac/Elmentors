<?php
  $f = fopen("lib/userdata", "r");
  while (!feof($f)) {
    // Make an array using comma as delimiter
    $datum = explode(",",fgets($f));

    // Print Data
    echo "<li>" . $datum[1] . " is currently working at " . $datum[2];
    echo ". Previously worked at " . $datum[3] . ".</li>";
  }
  fclose($f);
?>
