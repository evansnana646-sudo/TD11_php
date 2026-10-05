<?php
require_once 'model/ContactDB.php';
require_once 'model/Database.php';



$ContactDB=new ContactDB();
echo $ContactDB->create("1","toto","tata","693033561","toto@gmail.com",date("Y-m-d H:i"));

echo "ok";  
?>