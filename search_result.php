<?php
session_start();
require_once "functions.php";
require_once "structures/header.php";

echo '<a href="logged_in.php">Go back to main page</a>';

require_once "forms/search_form.php";

$sql_command = $_SESSION['current_search'];

$result = mysqli_query($db_connection, $sql_command);

# For each book found, create entry in table
$count = 0;
while ($row = mysqli_fetch_array($result)){
    require_once "table/table_header.php"; # This require ONCE is not stable?
    $count ++;
    $seller_name = $row['SellerName']; # Are we actually using member - book table?
    $book_name = $row['BookName'];
    $isbn = $row['ISBN'];
    $dep = $row['Department'];
    $cond = $row['BookCond'];
    $price = $row['Cost'];
    $comments = $row['Comments'];
    $id = $row['id'];

# Table HTML
echo <<<_END
<tr>
<td> $seller_name </td>
<td> $book_name </td>
<td> $isbn </td>
<td> $dep </td>
<td> $cond </td>
<td> $comments </td>
<td> $price </td>
<td> $id </td>
</tr>
_END;
}

# If no results, give feedback
if ($count == 0){
  echo "I'm sorry, it seems like there were no results in our database that matched your request.";
} else {
# MAKE MODULAR once figured out why not working for header
require_once "table/table_footer.php";
include_once "table/sort_capability.php";
}

require_once "structures/footer.php";
?>
