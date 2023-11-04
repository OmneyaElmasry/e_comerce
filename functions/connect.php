  <?php
  
  DEFINE('HOST','localhost');
  DEFINE('USER','root');
  DEFINE('PASS','');
  DEFINE('DBNAME','dream_project');
 
$conn=new mysqlI(HOST,USER,PASS,DBNAME);

$conn->set_charset('utf8');
  ?>

