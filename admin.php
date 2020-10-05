<?php
header("Content-Type: application/json");

include "./db.php";
$query = $_POST["query"];

if ($result = mq($query)) {
  $o = array();
  while ($row = mysqli_fetch_object($result)) {
    $t = new stdClass();
    $t->id = $row->id;
    $t->userid = $row->userid;
    $t->email = $row->email;
    $t->password = $row->password;
    $t->name = $row->name;
    $o[] = $t;
    unset($t);
  }
} else {
  $o = array(0 => 'empty');
}

echo json_encode($o);
