<?php
include "heder.php";
include "sideMenu.php";
include "function.php";


?>

<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crud Operation Using OOP's </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                echo '<table id="listData" class="table table-bordered table-hover">';
                                echo "<thead>";
                                echo "<tr>
                                    <th>Id</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>empPassword</th>
                                    <th>Confirm Passwor</th>
                                    <th>Profile Image</th>
                                    <th>Mobile Number</th>
                                    <th>Gender</th>
                                    <th>Hobby</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                    </tr>";
                                echo "<tr>";
                                echo "</thead>";
                                $fetchdata = new employee();
                                $sql = $fetchdata->fetchdata();
                                while ($row = mysqli_fetch_array($sql)) 
                                {
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['firstName'] . "</td>";
                                    echo "<td>" . $row['lastName'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['empPassword'] . "</td>";
                                    echo "<td>" . $row['confirmPassword'] . "</td>";
                                    echo "<td>" . $row['profile_image'] . "</td>";
                                    echo "<td>" . $row['mobileNumber'] . "</td>";
                                    echo "<td>" . $row['gender'] . "</td>";
                                    echo "<td>" . $row['hobby'] . "</td>";
                                    echo "<td>" . $row['country'] . "</td>";
                                    echo "<td>
                                    <button class='btn btn-dark'><a href='updateoop.php?id=" . $row['id'] . "'>Update</a></button>
                                    <button class='btn btn-danger'><a href='deleteoop.php?id=" . $row['id'] . "'>Delete</a></button>
                                    </td>";
                                echo "</tr>";
                                }
                                echo " </table>";

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php
//footer file include
include "footer.php";

?>