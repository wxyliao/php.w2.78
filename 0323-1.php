<?php include ("header.php"); ?>
<hr>
<?php
  $chi = 90;
  $eng = 95;
  $mat = 100;
  $his = 85;
  $total = $chi + $eng + $mat + $his;
  $avg = $total / 4;
  echo "Total is $total, Average is $avg";
?>
<?php include ("footer.php"); ?>