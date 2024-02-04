<?php
    require_once('my.php');
    $query="SELECT * FROM regi";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        table{
            box-shadow: 0 5px 12px rgba(32,32,32,.3);
    margin: 15px 0;
        }
     
        </style>
</head>
<body>
    <div class="container my-5">
        <br><h2>STUDENT LIST</h2>
        <a class="btn btn-primary" href="apply.php" role="button">new student</a>
        <div align="right">
        <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php">Logout
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                            </a>
                        </li>
                    </ul>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Adhar No</th>
                    <th>Phonenumber	</th>
                    <th>Standard</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                <tr>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['dateofbirth'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['adhar'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td><?php echo $row['standard'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['status'];?></td>
                </tr>

                <?php          
                        }
                ?>
                </tr>
            </thead>
        <tbody>
</body>
</html>

