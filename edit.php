<?php include 'config.php';

// Accessing ID from Universal Resource Locator
$id = $_GET['id'];

// Accessing existing data in the database
$result = $connection->query("SELECT * FROM apartment WHERE id=$id");
$row =$result->fetch_assoc();

// updatind the existing data 
if(isset($_POST['update'])) {
    $roomNumber = $_POST['roomNumber'];
    $roomType = $_POST['roomType'];
    $price= $_POST['price'];
    $status = $_POST['status'];

    if($connection->query("UPDATE apartment SET
    roomNumber = '$roomNumber',
     roomType = '$roomType',
     price = '$price',
     status = '$status' 
     WHERE id=$id")){

      echo "Update successifully";
     }else{
      echo "Error: ". $connection->error;
     }

     header("location: display.php");
}
?>

<!DOCTYPE html>
<html>
 <head                                                                                                           link rel="stylesheet" href="style.css">
    <title>Editing Rooms</title>
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
    background: href="heaven.png";
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
    border-collapse: collapse;
    margin-top: 20px;
}

/* Table Header */
th {
    background: #4CAF50;
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
    background: #f1f1f1;
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
    margin-bottom: 15px;
    background: #4CAF50;
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
 <boby>
    <h2>Editing Rooms</h2>

    <form method="POST">
        Room Number: <input type="number" name="roomNumber" placeholder="Numbers" value="<?= $row['roomNumber']; ?>"><br><br>
         Room Type: <input type="text" name="roomType"placeholder="Text only" value="<?= $row['roomType']; ?>"><br><br>
          Price: <input type="number" name="price" placeholder="Numbers only" value="<?= $row['price']; ?>"><br><br>
           Status: <input type="text" name="status" placeholder="text only" value="<?= $row['status']; ?>"><br><br>
        <button name="update">Update</button>

</form>
 </body>   
</html>