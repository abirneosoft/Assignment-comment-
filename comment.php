<?php
include("db.php");
$Ert=$Edes="";
if(isset($_POST['submit'])){
$title=$_POST['title'];
$description=$_POST['description'];

$tmp=$_FILES['att']['tmp_name'];
$fname=$_FILES['att']['name'];



$dest="Image/$fname";

if(empty($title)){
  $Ert="plz enter title";
}  
if(empty($description)){
  $Edes="plz enter description ";
}
else{
  if($title!='' && $description!=''){
    move_uploaded_file($tmp,$dest);
  }
  else{
    echo "not upload ";
  }

}
// print_r($Ert);
if($Edes=="" and $Ert==""){
  if(mysqli_query($conn,"insert into detail(title,description,image) values('$title','$description','$dest')")){
    header("location:dashboard.php");
  }
  else{
    echo "not added";
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
  <h1 class="display-4 text-center">comment Panel</h1>
  
</div>
    
    
  <div class="container border border-warning bg-primary" style="width:700px;">
  
        <form method="post" enctype="multipart/form-data">
            Title: <span class="error">* <?php echo $Ert;?></span>
            <input type="text" class="form-control" name="title"  placeholder="Enter your title"> <br>
            
            
            <div class="form-group">
            <label for="description">Description</label> <span class="error">* <?php echo $Edes;?></span>
             <textarea class="form-control rounded-0" name="description" rows="3" placeholder="type your comment here ....."></textarea>
            </div>
            
            <div class="form-group">  <span class="error">*</span>
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file"  name="att"> <br>
            <button type="submit" name="submit" >Submit</button>
        </form>
    
    
    
</div>


<?php include("foot.php");?>
    </body>
</html>