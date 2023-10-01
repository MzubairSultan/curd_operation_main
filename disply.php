<?php 
include("connection.php");
$displayQuery = "SELECT * FROM register3";
$data = mysqli_query($conn,$displayQuery);
$result = mysqli_num_rows($data);
echo $result;
?>
<table border="1px ">
 <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Password</th>
    <th> Confirm Password</th>
    <th> Gender</th>
    <th> Email</th>
    <th> Mobile</th>
    <th>Address</th>
    <th>Language</th>
    <th>Course</th>
    <th colspan="2">Operation</th>

 </tr>

<?php 
       
       if($result>0){

       

       while($result  = mysqli_fetch_assoc($data))
       {
        ?>
         <tr>
         <td><?php echo $result['id']?></td>
         <td><?php echo $result['fname']?></td>
         <td><?php echo $result['lname']?></td>
         <td><?php echo $result['password']?></td>
         <td><?php echo $result['conpassword']?></td>
         <td><?php echo $result['gender']?></td>
         <td><?php echo $result['email']?></td>
         <td><?php echo $result['mobile']?></td>
         <td><?php echo $result['address']?></td>
         <td><?php echo $result['language']?></td>
         <td><?php echo $result['newcourse']?></td>
         <td><a href="update.php?id=<?php echo $result['id']?>">Edit</a></td>
         <td><a onclick="return confirm('Are you shure you want to delete entry?')" href="delete.php?id=<?php echo $result['id']?>" >Delete</a></td>
         </tr>
           
        <?php
        
          }
        }
        
        ?>
     
</table>

<?php
 
?>