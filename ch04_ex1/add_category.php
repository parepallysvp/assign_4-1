<?php
// get category name
$category_name= filter_input(INPUT_POST, 'category_name');

//validate inputs

if ($category_name == null || $category_name == false){
   $error= "Invalid product data. Check all fields and try again.";
   include('error.php');
} else {
   require_once('database.php');

//Add the category_name to the database
$query='insert into categories_guitar1 (categoryName) values (:category_name)';

$statement = $db->prepare($query);
$statement->bindValue(':category_name', $category_name);
$statement->execute();
$statement->closeCursor();

//Display the Product list page
  include('category_list.php');
}
?>
