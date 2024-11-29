<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
</head>

<body>

    <?php
    include("./db_connect.php");
 
    //fetch data
    
    $sql = "SELECT * FROM `emp` ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
        <th>Id</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>email</th>
        <th>empPassword</th>
        <th>confirmPassword</th>
        <th>profileImage</th>
        <th>phoneNumber</th>
        <th>gender</th>
        <th>hobby</th>
        <th>country</th>
        <th>Action</th>

        </tr>";
        echo "<tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstName'] . "</td>";
            echo "<td>" . $row['lastName'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['empPassword'] . "</td>";
            echo "<td>" . $row['confirmPassword'] . "</td>";
            echo "<td>" . $row['profileImage'] . "</td>";
            echo "<td>" . $row['phoneNumber'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['hobby'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "<td>
                <button class='btn btn-dark'><a href='update.php?id=" . $row['id'] . "'>Update</a></button>
                <button class='btn btn-danger'><a href='delete.php?id=" . $row['id'] . "'>Delete</a></button></td>";
            echo "<tr>";
            
        }
        echo "</table>";
    }
    
    
    ?>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>