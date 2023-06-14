<?php  
  
session_start();  
  
require 'config.php';  
  
if (isset($_GET['id'])) {  
//    $book = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);  
  
  
// if(isset($_POST['delete'])){  
  
   $collection->deleteOne(  
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],  
       //['$set' => ['name' => $_POST['name'], 'detail' => $_POST['detail'],]]  
    );  
  
  $_SESSION['success'] = "Deleting of Book is successful";  
   header("Location: index.php");  
}  
  
?> 


<!-- $book = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])])->deleteOne();  
 
  
session_start();  
  
require 'config.php';  
  
if (isset($_GET['id'])) {  
   $book = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);  


   $_SESSION['success'] = "Deleting of Book is successful"; 
   header("Location: index.php");
} 

https://www.javatpoint.com/crud-operation-using-php-and-mongodb
?> -->
