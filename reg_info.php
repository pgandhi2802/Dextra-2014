<?php
include 'fixed_part/connect.php';
session_start();
if(isset($_SESSION['logged_in']))
{
    $query = "select * from register";  
    $result = mysqli_query($con,$query);
    $filename = "register_info.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('Online Id','First Name','Last Name','Gender','College','Branch','Enrollment No.','City','State','Contact','Email'));
    while ($row = mysqli_fetch_array($result)) {
        fputcsv($handle, array($row['uni_id'],$row['fname'],$row['lname'],$row['gender'],$row['college'],$row['branch'],$row['enroll'],$row['city'],$row['state'],$row['contact'],$row['email']));
    }
    fclose($handle);
    $sql="select * from register";
    $result=  mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dextra 2014</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        
    </head>
    <body>
	<div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
            <div id="logout" style="display:block;width:100%;height: 70px;margin-top: 30px;">
            <a href="logout.php" style="background:#678;padding:10px;font-size:150%;color:white;margin-right: 100px;">Logout</a>
            <a href="register_info.csv" style="background:#678;padding:10px;font-size:150%;color:white;margin-right: 100px;">Click Here to Download</a>
        </div>
            <table>
                <tr><th>Online Id</th><th>Name</th><th>College</th><th>Enrollment</th><th>Branch</th><th>Email</th><th>Contact No.</th></tr>
                <?php 
                    while($row=mysqli_fetch_array($result))
                    { ?>
                <tr><td><?php echo $row['uni_id'];?></td><td><?php echo $row['fname'].' '.$row['lname'];?></td><td><?php echo $row['college'];?></td><td><?php echo $row['enroll'];?></td><td><?php echo $row['branch'];?></td><td><?php echo $row['email'];?></td><td><?php echo $row['contact'];?></td></tr>
<?php               }
                ?>
            </table>
        <?php include 'fixed_part/footer.php';?>
		<script src="scripts/right_click_disable.js"></script>
	</body>
</html>
<?php } 

else

{
	header('location:login.php');
}?>