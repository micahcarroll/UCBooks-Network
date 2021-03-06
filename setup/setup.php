<!--
Creates the SQL database and the tables for books, members and member-books connections
-->
<?php
# Requires setup_functions, necessary to have basic info, and functions used in this section
require_once 'setup_functions.php';

# Create database and give feedback
create_db($db_database);

# Requires general functions, and automatically connects to the created database
require_once '../functions.php';

# Defining and creating database table for books
$book_data_table_parameters = "id MEDIUMINT NOT NULL AUTO_INCREMENT,
                              SellerName varchar(100),
                              BookName varchar(200),
                              ISBN INTEGER,
                              Department varchar(50),
                              BookCond varchar(50),
                              Comments varchar(50),
                              Cost INTEGER,
                              TimeID DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                              PRIMARY KEY (id)";

createTable($db_hostname, $db_username, $db_password, $db_database, $book_data_table_parameters, $db_book_table_name);

# Defining and creating database table for members
$members_table_parameters = "id MEDIUMINT NOT NULL AUTO_INCREMENT,
                              Username varchar(100),
                              Password varchar(200),
                              Email varchar(50),
                              Activated varchar(50),
                              PRIMARY KEY (id)";

createTable($db_hostname, $db_username, $db_password, $db_database, $members_table_parameters, $db_member_table_name);

# Defining and creating database table for book - member pairs
$member_book_table_parameters = "UserID varchar(10),
                                Username varchar(100),
                                BookID varchar(50),
                                PRIMARY KEY (BookID)";

createTable($db_hostname, $db_username, $db_password, $db_database, $member_book_table_parameters, $db_member_book_t_name);

# Redirect button to main page
echo <<<_END
<a href="../index.php">Go to index.php</a>
_END;
?>
