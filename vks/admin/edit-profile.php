<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $userid=$_GET['uid'];
    $father_name=$_POST['father_name'];
    $mother_name=$_POST['mother_name'];
    $contact=$_POST['contact'];
    $gender=$_POST["gender"];

    $dob=$_POST['dob'];

    $blood_group=$_POST['blood_group'];

    $address=$_POST['address'];

    $country=$_POST['country'];

    $state=$_POST['state'];

    $city=$_POST['city'];

    $pin_code=$_POST['pin_code'];

    $department=$_POST['department'];
    
    $course=$_POST['course'];

$msg=mysqli_query($con,"update users set fname='$fname',lname='$lname',contactno='$contact',father_name='$father_name',mother_name='$mother_name',gender='$gender',
dob='$dob',blood_group='$blood_group',address='$address',city='$city',state='$state',country='$country',pin_code='$pin_code',course='$course',department='$department'
where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>First Name</th>
                                       <td><input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required /></td>
                                   </tr>
                                         <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>

                                   <tr>
                                    <th>Father Name</th>
                                       <td><input class="form-control" id="fname" name="father_name" type="text" value="<?php echo $result['father_name'];?>" required /></td>
                                   </tr>

                                   <tr>
                                    <th>Mother Name</th>
                                       <td><input class="form-control" id="fname" name="mother_name" type="text" value="<?php echo $result['mother_name'];?>" required /></td>
                                   </tr>

                                   <tr>
                                    <th>Date of Birth</th>
                                       <td><input class="form-control" id="fname" name="dob" type="text" value="<?php echo $result['dob'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Gender</th>
                                       <td><input class="form-control" id="fname" name="gender" type="text" value="<?php echo $result['gender'];?>" required /></td>
                                   </tr>
                                   <th>Blood Group</th>
                                       <td><input class="form-control" id="fname" name="blood_group" type="text" value="<?php echo $result['blood_group'];?>" required /></td>
                                   </tr>
                                   
                                   <tr>
                                    <th>Address</th>
                                       <td><input class="form-control" id="fname" name="address" type="text" value="<?php echo $result['address'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>City</th>
                                       <td><input class="form-control" id="fname" name="city" type="text" value="<?php echo $result['city'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>State</th>
                                       <td><input class="form-control" id="fname" name="state" type="text" value="<?php echo $result['state'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Country</th>
                                       <td><input class="form-control" id="fname" name="country" type="text" value="<?php echo $result['country'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Pin Code</th>
                                       <td><input class="form-control" id="fname" name="pin_code" type="text" value="<?php echo $result['pin_code'];?>" required /></td>
                                   </tr>
                                   <th>course</th>
                                       <td><input class="form-control" id="fname" name="course" type="text" value="<?php echo $result['course'];?>" required /></td>
                                   </tr>
                                   <th>Department</th>
                                       <td><input class="form-control" id="fname" name="department" type="text" value="<?php echo $result['department'];?>" required /></td>
                                   </tr>
                               
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
 
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
