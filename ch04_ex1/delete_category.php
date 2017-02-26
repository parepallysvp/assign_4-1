<?php
include('database.php');

//validate inputs
$category_name= filter_input(INPUT_POST, 'category_name');


//Delete the category name from the database 
if ($category_name != false){
 $query='delete from categories_guitar1 where categoryName = :category_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':category_name', $category_name);
  $statement->execute();
  $statement->closeCursor();
}else {
	$error = 'syntax error';
        include('error.php');
}
//Display the category list
include('category_list.php');
?>
