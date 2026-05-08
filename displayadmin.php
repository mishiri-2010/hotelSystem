<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head > 
    <title> Hotel Management System</title>
</head>
<style>
   /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: blue black;
    padding: 30px;
}

/* Title */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Container */
.container {
    width: 90%;
    max-width: 1000px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Table */
table {
    width: 100%;
    border-collapse: fixed;
    margin-top: 40px;
}

/* Table Header */
th {
    background: #081708ff;
    color: white;
    padding: 12px;
    text-transform: uppercase;
    font-size: 14px;
}

/* Table Data */
td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

/* Hover effect */
tr:hover {
    background: #b15d5dff;
}

/* Buttons */
a {
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 5px;
    color: white;
    font-size: 13px;
}

/* Edit Button */
a[href*="edit"] {
    background: #2196F3;
}

/* Delete Button */
a[href*="delete"] {
    background: #f44336;
}

/* Add Button */
.add-btn {
    display: inline-block;
    margin-bottom: 30px;
    background: #9aac9aff;
}

/* Form */
form {
    width: 400px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Inputs */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Button */
button {
    width: 100%;
    padding: 10px;
    background: #4CAF50;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

/* Button hover */
button:hover {
    background: #45a049;
}
 
</style>
<body>
<h1><marquee>Hotel Room Details</marquee></h1> 
<section>
<table border="4">
    <section>
  <tr>
    <div>
     <th>ID</th>
     <th>Room Number</th>
     <th>Room Type</th>
     <th>Price</th>
     <th>Status</th>
     <th>UPDATE<th>
  
</div>
 </tr>

 <?php
 $result = $connection->query("SELECT * FROM apartment");

 while ($row = $result->fetch_assoc()):
 ?>

<tr>
   <td><?= $row['id']; ?></td> 
   <td><?= $row['roomNumber']; ?></td> 
   <td><?= $row['roomType']; ?></td>
    <td><?= $row['price']; ?></td>
     <td><?= $row['status']; ?></td>
       <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
         <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
     </td>


</tr>
 </section>
<?php endwhile; ?>
</table>

</body>
</html>
