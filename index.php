<?php
// Create database connection using config file
include "config.php";

// Fetch all users data from database
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);

?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($user_data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
} else {
    echo "0 results";
}
    
    ?>
    </table>
</body>
</html>