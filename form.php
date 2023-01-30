<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
      margin-left: 200px;
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
        
          style="width: 2rem; height: 2rem; color:"" alt=""> <span style="color: white;">A & T Services</span></a>




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
            <a class="nav-link" href="tel:8130319810" style="color: white;">81-303-198-10</a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="tel:7838813058" style="color: white;">78-388-130-58</a>
        </li>

    </ul>
  </div>
</nav>
</div>
<div class="container">
  <form>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email " placeholder="name@example.com">
      </div>
      
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enter Your Name </label>
        <input type="text" class="form-control" name="name " id="exampleFormControlInput1"  placeholder="enter your name ">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Address</label>
        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="enter your address ">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Mobile No.</label>
        <input type="tel" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Enter Your Mobile No. ">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Describe your problem </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem" placeholder="what problem you face "></textarea>
        <label for="customRange1" class="form-label">Example range</label>
<input type="range" class="form-range" id="customRange1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
                      
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $EMAIL =$_POST['email'];
  $NAME =$_POST['name'];
  $ADDRESS =$_POST['address'];
  $MOBILE =$_POST['mobile'];
  $PROBLEM =$_POST['problem'];

}
$servername ="localhost";
$username ="root";
$password ="";
$database ="contact"

$conn = mysqli_connect(.$servername, .$username, .$password,  .$database);

$sql =INSERT INTO `contact us` (`email`, `name`, `address`, `mobile`, `problem`) VALUES ('$email', '$name ', '$address', '$mobile', '$problem');
$result =mysqli_query($conn ,$sql);
?>

</body>
</html>