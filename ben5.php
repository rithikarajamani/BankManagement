<html>
    <head>
        <style>
            h1{
          color:black;
          font-style:unset;
      }
        table{
            border-style:solid;
            border-width:2px;
            border-color:green;
            font-family: normal;
  background-color: white;
  border:4px solid green;
  width:40%;
  height:160px;
  padding:center;
  margin-left: auto;
  margin-right: auto;
    }
    body{
        background-color: white;
    }
        
        </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
        </head>
        <body>
         <center><h1>Add Beneficiary Confirmation</h1></center>
    <!-- <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/hostel/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/form1.html">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/search.html">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/display.php">ViewDetails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/rare.php">RareBloodGroupDonors</a>
          </li>
         
        </ul>
      </div>
    </nav>  -->

        
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        
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
                                                    <label for="">Name:</label>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Mobile Number:</label>
                                                    <input type="text" value="<?= $row['mobile']; ?>" class="form-control">
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
    
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
        </body>
</html>
