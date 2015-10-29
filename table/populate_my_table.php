<!--
Logic to add items to user's books table
-->
<?php
# Checking connection and retrieving data from 'data' table
$query= "SELECT * FROM " . $db_book_table_name;
$result = mysqli_query($db_connection, $query);
$count = 0;
$buttons = array();

# Add row for each result
while ($row = mysqli_fetch_array($result)){
  if ($row['SellerName'] === $username){
    $count++;
    $seller_name = $row['SellerName'];
    $book_name = $row['BookName'];
    $isbn = $row['ISBN'];
    $dep = $row['Department'];
    $course = $row['Course'];
    $cond = $row['BookCond'];
    $price = $row['Cost'];
    $comments = $row['Comments'];
    $id = $row['id'];

# Unclear why if I shift echo and html lines right it won't work REDOTHIS WITH NEW FILES
echo <<<_END
<tr>
  <td> $seller_name </td>
  <td> $book_name </td>
  <td> $isbn </td>
  <td> $dep </td>
  <td> $course </td>
  <td> $cond </td>
  <td> $comments </td>
  <td> $price </td>
  <td> $id <form action="" method="POST"><input name="delete[]" type="submit" value="Delete$count"></form></td>
</tr>
_END;
  $buttons[$count] = $id;
  }
}
# If no rows (books) are found, give feedback
if ($count == 0) {
  echo "You have not added any books yet!";
}
?>
