<?php
  include("connection.php"); 
   $ids =$_GET['id'];
   $displayQuery = "SELECT * FROM `register3` WHERE id='$ids' ";
   $data = mysqli_query($conn,$displayQuery);
   $result  = mysqli_fetch_assoc($data);
   $coursese = $result['newcourse'];
   $courses1= explode(",",$coursese);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <div class="containter">
        <h1>update student detail</h1>

        <form action="" method="POST">
          <div class="mydiv1">
             <label for=""> First Name</label>
              <input type="text" name="fname" value="<?php echo $result['fname']?>">
          </div>

          <div class="mydiv2">
             <label for=""> Last Name</label>
              <input type="text" name="lname" value="<?php echo $result['lname']?>">
          </div>
          
           <div class="mydiv3">
             <label for="">Passsword</label>
              <input type="password" name="password" id="" value="<?php echo $result['password']?>">
          </div>
           <div class="mydiv4">
             <label for=""> Confirm  Passsword</label>
              <input type="password" name="conpassword" id="" value="<?php echo $result['conpassword']?>">
          </div>
          
            <div class="mydiv5">
             <label for="">Gender</label>
                <select name="gender" value="" >
                 <option value="" >Select</option>
                 <option value="Male"<?php
                   if($result['gender']=='Male'){
                    echo "selected";
                   }
                 
                 ?> >Male</option>
                 <option value="Female"
                 <?php
                   if($result['gender']=='Female'){
                    echo "selected";
                   }
                 
                 ?> >Female</option>
                </select> 
          </div>

          <div class="mydiv6">
             <label for="">Email</label>
              <input type="email" name="email" id="" value="<?php echo $result['email']?>">
          </div>

          <div class="mydiv7">
             <label for="">Mobile</label>
              <input type="tel" name="mobile" id="" value="<?php echo $result['mobile']?>">
          </div>

          <div class="mydiv8">
             <label for="">Adress</label>
              <textarea name="adress" id="" cols="30" rows="3" ">
              <?php echo $result['address']?>
              </textarea>
          </div>
          <div class="mydiv9">
             
          <input type="checkbox" name="chekbox">
          <label for="vehicle1">Terms and Conditon apply</label><br>
          </div>   

          <div class="radio">
                  <input type="radio" id="html" name="fav_language" value="HTML"
                
                <?php
                  if($result['language']=='HTML'){
                     echo "checked";
                  }
                ?>
                
                >
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS"
                
                <?php
                  if($result['language']=='CSS'){
                     echo "checked";
                  }
                ?>
                >
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="Java"
                
                <?php
                  if($result['language']=='Java'){
                     echo "checked";
                  }
                ?>
                 
                
                >
                  <label for="css">java Script</label><br>
            </div>


            <div class="chekboxmy">
            <label for="">Courses</label>
            <input type="checkbox" name="lang[]" value="English"
             <?php
             
              if(in_array('English',$courses1)){
                   echo "checked"; 
              }
             ?>
            >
            <label for="">English</label>
            <input type="checkbox" name="lang[]" value="Urde"
            
            
            <?php
             
              if(in_array('Urde',$courses1)){
                   echo "checked"; 
              }
             ?>
            
            
            > 
            <label for="">Urdu</label> 
            <input type="checkbox" name="lang[]" value="Spanish"
            
            
            
            <?php
             
              if(in_array('Spanish',$courses1)){
                   echo "checked"; 
              }
             ?>
            
            
            >
            <label for="">Spanish</label>
            
            </div>
          
            <input type="submit" value="Registration" name="update">
        </form>

    </div>
</body>
</html>

<?php
 if(isset($_POST['update'])){
  
    $fname =$_POST['fname'];
    $lname = $_POST['lname'];
    $password =$_POST['password'];
    $conpassword =$_POST['conpassword'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $address =$_POST['adress'];
    $language= $_POST['fav_language'];
    $course = $_POST['lang'];
    $course2=implode(",",$course);
   // $insertQuery = "INSERT INTO register3( fname, lname, password, conpassword, gender, email, mobile, address) VALUES ('$fname','$lname ','$password','$conpassword','$gender','$email','$mobile','$address')";

     $updateQuery="UPDATE register3 SET fname='$fname',lname='$lname',password='$password',conpassword='$conpassword',gender='$gender',email='$email',mobile='$mobile',address='$address', language='$language', newcourse='$course2' where id= '$ids'";


     $result = mysqli_query($conn,$updateQuery);
     if($result){
        echo "<script>alert('Record Updated')</script>";
        ?>
          <meta http-equiv = "refresh" content = "0; url = http://localhost/php-course/curd_operation3/disply.php" />
        <?php
     }else{

        echo "data failed";
     }
           
    
 }

?>