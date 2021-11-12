<?php
include("db.php");
$emailErr=$Euname=$Ename=$Eage=$Egen=$Ecity=$Epass="";
if(isset($_POST['submit'])){
    $mail=$_POST['email'];
    $u_name=$_POST['uname'];
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $age=$_POST['age'];
    $gen=@$_POST['gender'];
    $city=$_POST['city'];
    
    
    if(empty($mail)){
    $emailErr="plz enter email";
    }
    if(empty($u_name)){
      $Euname="plz enter username";
    }
    if(empty($name)){
      $Ename="plz enter name";
    }
    if(empty($pass)){
        $Epass="plz enter Password";
    }
    if(empty($age)){
      $Eage="plz enter age";
    }
    if(empty($gen)){
      $Egen="plz enter gender";
    }
    if(empty($city)){
        $Ecity= "plz enter city";
    }
   
    
  
if($mail!="" && $name!="" && $u_name!="" && $pass!="" && $age!="" && $gen!="" && $city!=""){
    
    if(mysqli_query($conn,"insert into user(email,uname,name,password,age,gender,city) values('$mail','$u_name','$name','$pass','$age','$gen','$city')")){
        header("location:login.php");

    }
    else{
         echo "Already added";
        }


}

    
}


?>


<html>
<head>
<?php include("head.php") ;?>
<style>
    .error{
        color:red;
    }
</style>
</head>
<body>
    
<div class="jumbotron bg-info">
  <h1 class="display-4 text-center">Register Panel</h1>
  
</div>
    
    
  <div class="container border border-warning bg-success" style="width:700px;">
<form method="post" enctype="multipart/form-data">
    <h1>Register</h1>
  
    Email address <span class="error">* <?php echo $emailErr;?></span>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
    User name <span class="error">* <?php echo $Euname;?></span>
    <input type="text" class="form-control" name="uname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
    
    Name <span class="error">* <?php echo $Ename;?></span>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your name" name="name">
    
    Password  <span class="error">* <?php echo $Epass;?></span>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Password" name="password">

    Age <span class="error">* <?php echo $Eage;?></span>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Age" name="age">
    
    gender: 

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
    <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
    <label class="form-check-label" for="inlineRadio2">Female</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="other" >
    <label class="form-check-label" for="inlineRadio3">Others</label>
   
    </div><span class="error">* <?php echo $Egen;?></span>
    <br><br>
    City <span class="error">* <?php echo $Ecity;?></span>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your name" name="city">
    



  

   
  <button type="submit" class="btn btn-dark" name="submit">submit</button>
    <a href="login.php" class="text-light">Existing users?</a>
</form>
</div>
<div class="footer-copyright">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center bg-dark text-white ">
<p>Copyright  © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>

<?php include("foot.php");?>
    </body>
</html>