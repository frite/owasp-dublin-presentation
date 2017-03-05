<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 2);
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
  die('Could not connect: ' . mysql_error());
}
echo 'Connected succesfully to database <br>';
$db_selected = mysql_select_db('demo', $link);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}
echo 'Selected database succesfully <br>';

$result = mysql_query('SELECT id, labels FROM testdemo');

while($rows = mysql_fetch_array($result)){
  echo '<a href="index.php?id=' . $rows[0] . '">' . $rows[1] .'</a><br>';
}

if ( !is_null($_GET['id']) && isset($_GET['id']) ) {
  echo '<br>';
  $result = mysql_query('SELECT * FROM testdemo WHERE id=' . $_GET['id'] );
  while ( $rows = mysql_fetch_array($result) ) {
    echo 'The selected result has id ' . $rows[0] .' and value ' . $rows[1] . '<br>';
  }
}

mysql_close($link);
?>
