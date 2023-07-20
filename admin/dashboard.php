<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <!-- <div class="dashboard-header">
        <h2>Welcome Wada</h3>
    </div>  -->
    
    <div class="header">
        <div>
            <h1>Admin Dashboard</h1>
        </div>
        <ul>
            <li><a href="add-admin.html">Add Admin </a></li>
            <li><a href="add-place.html">Add Places</a></li>
            <li><a href="view-place.html">View Places</a></li>
        </ul>
    </div>

    <div class="dashboard-body">


        <div class="table-body">
            <table class="my_table">
                <tr>
                    <th>#</th>
                    <th>Place Title</th>
                    <th>Place Description</th>
                    <th>image</th>>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Marina Resort</td>
                    <td>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa dicta rerum dolor ipsam voluptas perferendis at quibusdam similique labore molestiae?</p>
                    </td>
                    <td>
                        <button></button>
                    </td>
                    <td>
                        <button>Edit</button>
                    </td>
                    <td> <button>Update</button> </td>
                    <td> <button>Delete</button></td>
                </tr>               
                              
            </table>
        </div>
    </div>
    
</body>
</html>