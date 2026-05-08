<?php include 'config.php';

// to see wether the form is submitted
if(isset($_POST['submit'])){

    //extracting information from the form
    $roomNumber = $_POST['roomNumber'];
    $roomType= $_POST['roomType'];
    $price = $_POST['price'];
    $status = $_POST['status'];

// enter the data into the database we have created
   $connection->query("INSERT INTO apartment (roomNumber, roomType, price, status) VALUES ('$roomNumber', '$roomType', '$price', '$status')"
);
  // sending back to index
   header("Destination: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Rooms</title>
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
    background-image: url('heaven.png');
    background-size: cover;      
    background-position: center; 
    background-repeat: no-repeat;
    height: 100vh;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Title */
h2 {
    text-align:left;
    margin-bottom: 30px;
    color: #333;
    padding:20px;
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
      margin-left: 0;
  margin-right: auto
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

form {
    width: 400px;
    margin-left: 20px; 
    margin-right: auto; 
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

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
 .hotel-banner {
    background-color: #7199D6; 
    color: #FFFFFF;
    padding: 10px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-bottom: 3px solid #AFD1F9;
  }
  .hotel-banner p {
    margin: 0;
    font-size: 1.2rem;
    font-weight: bold;
    text-transform: uppercase;
  }
p {
  color: #0A2E5C; 
  font-style: italic; 
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
  line-height: 1.6; 
  margin: 15px 0;
}

</style>   
<body>
    <div class="hotel-banner">
  <marquee behavior="scroll" direction="left" scrollamount="8">
    <p>Welcome to Blue Heaven Hotel – Your serene getaway in paradise! Enjoy luxury, comfort, and breathtaking views.</p>
  </marquee>
</div>

<h2>Add New Room</h2>
<form method="POST">
    Room Number:    <input type="text" name="roomNumber" required><br><br>
    Room Type:      <input type="text" name="roomType" required><br><br>
    Price:          <input type="text" name="price" required><br><br>
    Status:          <input type="text" name="status" required><br><br>
    
    <button name="submit">Add Room</button>
</form>
</body>
</html>
