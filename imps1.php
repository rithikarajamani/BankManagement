











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body {
          background-image: url("ezgif-sixteen_nine_265.webp");
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }</style>
</head>
<body>
<img align="left" src="allkvb.jpg" style="width:200px">
    <br>
    <br>
    <br>
    <br>
    
<center><h1>IMPS PAYMENTS</h1></center>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Search Beneficiary Accountant Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","bms");

                                    if(isset($_GET['id']))
                                    {
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM ben WHERE id1='$id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Beneficiary Id:</label>
                                                    <input type="text" value="<?= $row['bid']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Beneficiary Name</label>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">IFSC Code:</label>
                                                    <input type="text" value="<?= $row['code']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <center><a href="imps2.html" >  <button type="submit" class="btn btn-success">Next</button></a></center>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>