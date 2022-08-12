<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
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
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     
                            <div class="card-body">
                                <a href="edit-profile.php">Edit</a>
                                <table class="table table-bordered">
                                   <tr>
                                    <th>First Name</th>
                                       <td><?php echo $result['fname'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><?php echo $result['lname'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                                     <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><?php echo $result['contactno'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Father Name</th>
                                       <td colspan="3"><?php echo $result['father_name'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Mother Name</th>
                                       <td colspan="3"><?php echo $result['mother_name'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Gender</th>
                                       <td colspan="3"><?php echo $result['gender'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Date Of Birth</th>
                                       <td colspan="3"><?php echo $result['dob'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Blood Group</th>
                                       <td colspan="3"><?php echo $result['blood_group'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Address</th>
                                       <td colspan="3"><?php echo $result['address'];?></td>
                                   </tr>
                                   <tr>
                                       <th>City</th>
                                       <td colspan="3"><?php echo $result['city'];?></td>
                                   </tr>
                                   <tr>
                                       <th>State</th>
                                       <td colspan="3"><?php echo $result['state'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Country</th>
                                       <td colspan="3"><?php echo $result['country'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Pin Code</th>
                                       <td colspan="3"><?php echo $result['pin_code'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Course</th>
                                       <td colspan="3"><?php echo $result['course'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Department</th>
                                       <td colspan="3"><?php echo $result['department'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Profile Image</th>
                                       <td colspan="3"><?php echo "<img src='$result[profile_photo]' width='150px'>";?></td>
                                   </tr>
                                   
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php } ?>

                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
