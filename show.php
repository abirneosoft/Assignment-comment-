<html>
    <head>
        <title></title>
        <?php include("head.php"); ?>

    </head>
    <body>
   <?php 

$email=$_SESSION['sid'];    
$selectquery="select * from user where email='$email' ";
$query=mysqli_query($conn,$selectquery);
$res=mysqli_fetch_array($query);

?>
    <table class="table table-bordered">
    <thead>
   
    <tr>
        <th> Id</th>
        <td><?php echo $res['id'];?></td>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <th>uname</th>
        <td><?php echo $res['uname'];?></td>
      </tr>
      
      <tr>
        <th>name</th>
        <td><?php echo $res['name'];?></td>
             </tr>
      <tr>
        <th>Age</th>
        <td><?php echo $res['age'];?></td>
       </tr>
      
       <tr>
        <th>Gender</th>
        <td><?php echo $res['gender'];?></td>
       </tr>
      
       <tr>
        <th>City</th>
        <td><?php echo $res['city'];?></td>
       </tr>
      
      
      
      <tr>
      <th>Date</th>
      <td><?php echo $res['Created_at'];?></td>

      </tr>
      <tr>
          <th rowspan="2">Operation</th>
          <td><a href="comment.php?id=<?php echo $res['id'];?>" class="text-dark">comment</td>
        
      </tr>
          <td><a href="change.php?id=<?php echo $res['id'];?>" class="text-dark">change password</td>
      
    </tbody>
  </table>

   
   
    <?php include("foot.php"); ?>
    </body>
</html>