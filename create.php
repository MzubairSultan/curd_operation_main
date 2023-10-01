<?php
include("connection.php");
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

        <form action="" method="POST">
            <div class="mydiv1">
                <label for=""> First Name</label>
                <input type="text" name="fname">
            </div>

            <div class="mydiv2">
                <label for=""> Last Name</label>
                <input type="text" name="lname">
            </div>

            <div class="mydiv3">
                <label for="">Passsword</label>
                <input type="password" name="password" id="">
            </div>
            <div class="mydiv4">
                <label for=""> Confirm Passsword</label>
                <input type="password" name="conpassword" id="">
            </div>

            <div class="mydiv5">
                <label for="">Gender</label>
                <select name="gender">
                    <option value="select">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mydiv6">
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>

            <div class="mydiv7">
                <label for="">Mobile</label>
                <input type="tel" name="mobile" id="">
            </div>

            <div class="mydiv8">
                <label for="">Adress</label>
                <textarea name="adress" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="mydiv9">

                <input type="checkbox" name="chekbox">
                <label for="vehicle1">Terms and Conditon apply</label><br>
            </div>
            <div class="radio">
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="Java">
                  <label for="css">java Script</label><br>
            </div>
            
               <!--multiple chekbox ko select krny k liye hmy name attribute k sath [] use krna pry ga-->

            <div class="chekboxmy">
            <label for="">Courses</label>
            <input type="checkbox" name="lang[]" value="English">
            <label for="">English</label>
            <input type="checkbox" name="lang[]" value="Urde"> 
            <label for="">Urdu</label> 
            <input type="checkbox" name="lang[]" value="Spanish">
            <label for="">Spanish</label>
            
            </div>

            <input type="submit" value="Registration" name="submit">
        </form>

    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['adress'];
    $language= $_POST['fav_language'];
    $course= $_POST['lang'];
    $newcourse = implode(",",$course); // implode function hmri kisi bi array ko string my convert krta hy  jo hmry pas data arha hy wo array format my hy is liye hmy usy string my convert krny ky liye implode function ka use krty hy 
    $insertQuery = "INSERT INTO register3( fname, lname, password, conpassword, gender, email, mobile, address,language,newcourse) VALUES ('$fname','$lname ','$password','$conpassword','$gender','$email','$mobile','$address','$language','$newcourse')";
    $result = mysqli_query($conn, $insertQuery);
    if ($result) {
        echo "Data is sent into database";
    } else {

        echo "data failed";
    }
}

?>