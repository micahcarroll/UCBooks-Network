<!--
Table header with basic book info and sort buttons
-->
<?php
echo <<<_HEADER
<table class="table table-bordered table-striped" id="table">
  <thead>
    <tr>
      <th onclick="sort_table(general_books, 0, asc1); asc1 *= -1;">Seller Name</th>
      <th onclick="sort_table(general_books, 1, asc2); asc2 *= -1;">Book Title</th>
      <th onclick="sort_table(general_books, 2, asc3); asc3 *= -1;">ISBN</th>
      <th onclick="sort_table(general_books, 3, asc4); asc4 *= -1;">Department</th>
      <th onclick="sort_table(general_books, 5, asc6); asc6 *= -1;">Condition</th>
      <th onclick="sort_table(general_books, 6, asc7); asc7 *= -1;">Comments</th>
      <th onclick="sort_table(general_books, 7, asc8); asc8 *= -1;">Cost</th>
      <th onclick="sort_table(general_books, 8, asc9); asc9 *= -1;">Item number</th>
    </tr>
  </thead>
  <tbody id="book_parameters">
_HEADER;
?>
