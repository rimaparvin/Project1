<?php
include './function.php';
include './database.php';
$query="SELECT*FROM STUDENT";

$q = $conn->query($query);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .section-padding{
            padding:40px;
        }
        </style>
</head>

<body>
    <section id="heading" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2> All Student Information</h2>
                   <a class="btn btn-primary" href="./index.php">registration</a>
                  
                   <a class="btn btn-primary" href="./index.php">Back</a>

                </div>
            </div>
        </div>
    </section>

    <section id="registerform">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Student_id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Department</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($student = $q->fetch_assoc()) {
                                $i++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    
                                    <td><?php echo $student['S_id'] ?></th>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $student['email'] ?></td>
                                    <td><?php echo $student['phone'] ?></td>
                                    <td><?php echo $student['department'] ?></td>
                                    <td><a class="btn btn-danger" href="./delete.php?q=<?php echo $student['id']; ?>">Delete</a></td>
                                    <td><a class="btn btn-info" href="./edit.php?q=<?php echo $student['id']; ?>">Edit</a></td>
                                </tr>
                            <?php }
                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>