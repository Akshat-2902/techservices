<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint</title>
    <meta name="description" content="Tech Life Services delhi first and best Hardware company and service provider in delhi,ncr">
    <meta name="keyword" content="Hardware, Computer, Ram, Motherboard, Laptop, System, System-Hang, Harddisk, Proccessor, Keyborad, mouse">
    <meta name="description" content="We Repair Desktop and Laptop and do all type of hardware services.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--bootstrap-css-online-end-->
    
    <!--favicon-fontawsom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--favicon-fontawsom-end-->

    <!--offline-style-sheet-->
    <link href="style.css" rel="stylesheet">
    <!--offline-style-sheet-end-->
    <link rel="stylesheet" href="script.js">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
</head>

<style>
  body {
    
    background-color: white;
    color: black;
  
  }
  
  .dark-mode {
    background-color: black;
    color: white;
  }
  .container{
      margin: 100px;
      margin-left: 50px;
  }
  </style>

<body>

  <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<!--Navbar-start-->
    
<div class="navs">
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color:rgb(40, 109, 213)">
      <a class="navbar-brand" href="index.php#home"> <img src="img/logo.svg"
        
          style="width: 2rem; height: 2rem; color:"" alt=""> <span style="color: white;">Tech Life Services</span></a>




      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
          <i class="fa fa-bars fa-2x" aria-hidden="true" style="color: aliceblue;"></i>   
      </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
          <a class="nav-link" href="index.php" style="color: white;">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#services" style="color: white;">Services</a>
            </li>
    

            <li class="nav-item">
              <a class="nav-link" href="#about" style="color: white;">About Us</a>
              </li>
              <li class="nav-item">
               
          
  

  

        <li class="nav-item">
            <a class="nav-link" href="tel:8130319810" style="color: white;">81-303-19-810</a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="tel:7838813058" style="color: white;">78-388-130-58</a>
        </li>

    </ul>
  </div>
</nav>
</div>
<div class="container">

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $desc = $_POST['desc'];
        
        
      
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`email`, `name`,`address`, `mobile`, `concern`, `dt`) VALUES ('$email', '$name', '$address', '$mobile', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="container mt-3">
<h1>Contact us for your concerns</h1>
    <form  method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="name@gmail.com" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="enter your name " aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="name">address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="enter your city " aria-describedby="emailHelp">
    </div>

    
    <div class="form-group">
        <label for="name">Mobile Number</label>
        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="enter your mobile number " aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" placeholder="describe your problem " id="desc" cols="30" rows="5"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  </body>
</html>

