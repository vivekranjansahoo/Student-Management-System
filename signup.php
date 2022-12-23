<?php session_start();
require_once('includes/config.php');
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $father_name=$_POST["father_name"];
    $mother_name=$_POST["mother_name"];
    $contact=$_POST['contact'];
    $gender=$_POST["gender"];

    $dob=$_POST["dob"];

    $blood_group=$_POST['blood_group'];

    $address=$_POST["address"];

    $country=$_POST["country"];

    $state=$_POST["state"];

    $city=$_POST["city"];

    $pin_code=$_POST["pin_code"];

    $department=$_POST["department"];
    
    $course=$_POST["course"];

    $img_loc=$_FILES['profile']['tmp_name'];
    $img_name=$_FILES['profile']['name'];
    $uname=$_POST['user_name'];
    $img_ext=pathinfo($img_name, PATHINFO_EXTENSION);

    $img_size=$_FILES['profile']['size']/(1024*1024);

    $img_des="images/".$uname.".".$img_ext;
    move_uploaded_file($img_loc,$img_des);

    if($img_size>1){
        echo"<script>alert('image size is larger than 1 MB');</script>";
        exit();
    }

$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,user_name,password,contactno,father_name,
    mother_name,gender,dob,blood_group,address,city,state,country,pin_code,course,department,profile_photo) values('$fname','$lname','$email','$uname','$password','$contact','$father_name','$mother_name','$gender',
    '$dob','$blood_group','$address','$city','$state','$country','$pin_code','$course','$department','$img_des')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> Student Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File 
    <link rel="stylesheet" href="style.css">-->
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #1b1f25;
}

.login {
    width: 800px;
    height: min-content;
    padding: 40px 40px 80px;
    border-radius: 12px;
    background: #1b1a1a;
    text-align: left;
    box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
    5px 5px 15px rgba(0, 0, 0, 0.5);
}

.login h1 {
    font-size: 36px;
    margin-bottom: 25px;
    color: #20a4f1;
    font-weight: 500;
    letter-spacing: 2px;
}

.login form {
    font-size: 20px;
    color: #020f08;
}

.login form .form-group {
    margin-bottom: 12px;
    color: orange;
}

.login form input[type="submit"] {
    font-size: 20px;
    margin-top: 15px;
    color: white;

}
.form-control{
  color: white;
  background: #141313c2;
  box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
}
.forget {
  margin-top: 20px;
  margin-left: 200px;
  color: #555;
}
.forget a {
  color: #ff0047;
  margin-left: 10px;
}
    </style>
<script>  
    function validateForm() {  
        //collect form data in JavaScript variables  
        var pw1 = document.getElementById("password1").value;  
        var pw2 = document.getElementById("password2").value;    
          
         
        //minimum password length validation  
        if(pw1.length < 8) {  
          alert ("**Password length must be atleast 8 characters");    
          return false;  
        }  
      
        //maximum length of password validation  
        if(pw1.length > 15) {  
          alert ("**Password length reached maximum characters"); 
          return false;  
        }  
        
        if(pw1 != pw2) {  
            alert ("**Password are not same");
          return false;  
        }
     }  
     
    </script>  

</head>

<body>

    <div class="login">

        <h1 class="text-center">Student Registration Form!</h1>
        <br>
        
        <form class="was-validated" onsubmit ="return validateForm()"  method="POST" enctype="multipart/form-data">
            
            <div class="row g-3" style="color: orange;">
                <div class="col">
                    <label class="form-label" for="name">First Name</label>
                  <input class="form-control" type="text" class="form-control" placeholder="First name" name="fname" id="fname" required>
                  <div class="invalid-feedback" >
                    Please enter your firstname
                </div>
                </div>
                
                <div class="col">
                    <label class="form-label" for="name">Last Name</label>
                  <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname" required>
                  <div class="invalid-feedback">
                    Please enter your lastname
                </div>
                </div>
                
              </div>

<br>
                <label class="form-label" for="Username" style="color: orange;">Username</label>
                <input class="form-control" type="username" placeholder="Username" id="user_name"  name="user_name" required>
                <div class="invalid-feedback">
                    Please enter your username
                </div>
<br>
              
                <label class="form-label" for="email" style="color: orange;">Email address</label>
                <input class="form-control" type="email" id="email" placeholder="example@example.com" name="email"  required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            
                <br>       
                <label class="form-label" for="password" style="color: orange;">Password</label>
                <input class="form-control" type="password" id="password1" name="password" placeholder="..........." required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            
                <br>
                <label class="form-label" for="password" style="color: orange;">Re-Password</label>
                <input class="form-control" type="password" id="password2" name="password" placeholder="..........." required>
                <div class="invalid-feedback">
                    Please re-enter your password
                </div>

         
                <br>
                <label class="form-label" for="fname" style="color: orange;">Father's Name</label>
                <input class="form-control" type="name" placeholder="Enter Father Name"  id="name" name="father_name" required>
                <div class="invalid-feedback">
                    Please enter your  father's name
                </div>
             
            
                <br>
                <label class="form-label" for="mname"style="color: orange;">Mother's Name</label>
                <input class="form-control" type="name" placeholder="Enter Mother Name"  id="name" name="mother_name" required>
                <div class="invalid-feedback">
                    Please enter your Mother's name
                </div>
            

                <br>
                <label class="form-label" for="number"style="color: orange;">Phone number</label>
                <input class="form-control" type="number" id="number" placeholder="700XXXXXXX" name="contact" required>
                <div class="invalid-feedback">
                    Please enter your phone number
                </div>
          
                <br>
                <label class="form-label" for="gender" style="color: orange;">Gender</label>
                <div class="row ">
                    <div class="col" style="color: orange;">
                <input class="form-check-input mt-2" type="radio" value="male" name="gender" required>
                <label class="form-label" for="name" >MALE</label>
                <input class="form-check-input mt-2" type="radio" value="female" name="gender" required>
                <label class="form-label" for="name">FEMALE</label>
                <input class="form-check-input mt-2" type="radio" value="other" name="gender" required>
                <label class="form-label" for="name">OTHER</label>
                <div class="invalid-feedback">
                    Please select the Gender
                </div>
                    </div>
                    
                </div>
                
                <br>
            
            <div class="row g-3" style="color: orange;">
                <div class="col">
                    <label class="form-label" for="name">Date Of Birth</label>
                  <input class="form-control" type="date" class="form-control"  name="dob" required>
                  <div class="invalid-feedback">
                    Please select the Date
                </div>
                
            </div>
               
                <div class="col">
                    <label class="form-label" for="name" style="color: orange;">Blood Group</label>
                    <select id="inputState" class="form-select" required  style="background-color: wheat;" name="blood_group">
                        <option selected value="" >Choose</option>
                        <option value="A+" >A+</option>
                        <option value="B+" >B+</option>
                        <option value="o+" >0+</option>
                        <option value="AB+" >AB+</option>
                        <option value="o-">0-</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select the Blood Group
                    </div>
                </div>
                
              </div>
             
          <br>
          
            <div style="color: orange";>
                <label class="form-label" for="address">Address</label>
                <textarea class="form-control" rows="4" required name="address"></textarea> 
                <div class="invalid-feedback">
                    Please provide the address
                </div>
            </div>
            <br>

            <div class="row g-3" style=color:orange;>
                <div class="col md-4">
                    <label class="form-label" for="name">Contry</label>
                  <input class="form-control" type="name" class="form-control" placeholder="Country"  name="country" required>
                  <div class="invalid-feedback">
                    Please provide Country Name
                </div>
                </div>
 
                <div class="col">
                    <label class="form-label" for="name"style="color: orange;">State</label>
                  <input type="text" class="form-control" placeholder="State"  name="state" required>
                  <div class="invalid-feedback">
                    Please provide State Name
                </div>
                </div>

                <div class="col">
                    <label class="form-label" for="inputState"style="color: orange;" >city</label>
                  <select id="inputState" class="form-select" style="background-color: wheat;" name="city" required>
                    <option selected value="">Choose</option>
                    <option value="rourkela">Rourkela</option>
                    <option value="Bhubaneswer">Bhubaneswer</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select the city
                </div>
                </div>

              </div>
             
<br>

                <label class="form-label" for="number"style="color: orange;">Pin Code</label>
                <input class="form-control" type="number" id="number" colspan="10" placeholder="XXXXXXX"  name="pin_code" required>
                <div class="invalid-feedback">
                    Please provide pin code
                </div>
            
            <br>

                <label class="form-label" for="gender"style="color: orange;">Department</label>
                <div class="row ">
                    <div class="col" style="color: orange;">
                <input class="form-check-input mt-2" type="radio" value="cse"  name="department"required>
                <label class="form-label" for="name" >CSE</label>
                <input class="form-check-input mt-2" type="radio" value="mca"  name="department"required>
                <label class="form-label" for="name">MCA</label>
                <input class="form-check-input mt-2" type="radio" value="cen" name="department"required>
                <label class="form-label" for="name">CEN</label>
                <input class="form-check-input mt-2" type="radio" value="ece" name="department"required>
                <label class="form-label" for="name">ECE</label>
                <input class="form-check-input mt-2" type="radio" value="eie" name="department"required>
                <label class="form-label" for="name">EIE</label>
                <input class="form-check-input mt-2" type="radio" value="eee" name="department"required>
                <label class="form-label" for="name">EEE</label>
                <div class="invalid-feedback">
                    Please select the Department
                </div>
                    </div>
                </div>
        
                <label class="form-label" for="course"style="color: orange;">Course</label>
                <div class="row ">
                    <div class="col" style="color: orange;">
                <input class="form-check-input mt-2" type="checkbox" value="c" name="course">
                <label class="form-label" for="name">C</label>
                <input class="form-check-input mt-2" type="checkbox" value="c++" name="course">
                <label class="form-label" for="name">C++</label>
                <input class="form-check-input mt-2" type="checkbox" value="java" name="course">
                <label class="form-label" for="name">JAVA</label>
                <input class="form-check-input mt-2" type="checkbox" value="html" name="course">
                <label class="form-label" for="name">HTML</label>
                <input class="form-check-input mt-2" type="checkbox" value="css" name="course">
                <label class="form-label" for="name">CSS</label>
                <input class="form-check-input mt-2" type="checkbox" value="carbon" name="course">
                <label class="form-label" for="name">CARBON</label>
                <input class="form-check-input mt-2" type="checkbox" value="javaScript" name="course">
                <label class="form-label" for="name">JavaScript</label>
               
                    </div>
                </div>
         

<br>
                 <div class="mb-3" style="color: orange;">
                    <label for="formFile" class="form-label">Image Upload</label>
                    <input class="form-control" type="file" id="formFile"  name="profile" required>
                </div>

                <br>
               
                <input class="btn btn-success w-100" type="submit" value="SUBMIT" name="submit">


    
         <p class="forget">Have an account !!!<a href="login.php">Click Here</a></p>
      
        </form>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

</body>

</html>
