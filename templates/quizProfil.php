<?php
$totalPoints = 0;

if($_GET['Q1'] == "1") {
  $totalPoints ++;
}

$_GET["Q2"] = strtolower($_GET["Q2"]);
if($_GET['Q2'] == "vrai";
  $totalPoints ++;
}


if($_GET['Q1a'] == "1" && $_GET['Q1b'] == NULL && $_GET['Q1c'] == NULL && $_GET['Q1d'] == "1" && $_GET['Q1e'] == "1" && $_GET['Q1f'] == NULL) {
  $totalPoints ++;
}


if($_GET['Q4'] == "1";
  $totalPoints ++;
}

echo "Vous avez " . $totalPoints . " point(s)"
