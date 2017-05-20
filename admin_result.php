<?php
include 'fixed_part/connect.php';
session_start();
if(isset($_SESSION['logged_in']))
{
    if(isset($_POST['submit']))
    {
        $allowedExts = array("csv");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        if (($_FILES["file"]["size"] < 20000)&& in_array($extension, $allowedExts)) 
        {
            if ($_FILES["file"]["error"] > 0) 
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            }
            else 
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],"results/" . $_POST["event"].'_'.$_POST['round'].'.csv');
                $name=$_POST['event'];
                $file_name=$_POST["event"].'_'.$_POST['round'].'.csv';
				echo $name;
				echo $file_name;
                $insrt_query="insert into results(name,file_name)values('$name','$file_name')";
                $insrt_result=mysqli_query($con,$insrt_query);
                if($insrt_result)
                    echo 'done';
				else
					echo $insrt_result;
            }
        } 
        else 
        {
            echo "Invalid file";
        }
    }
?>
<html>
    <head>
        <title>Result Upload</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
    </head>
<body>
    <div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
        <div id="logout" style="display:block;width:100%;height: 70px;">
            <a href="logout.php" style="background:#678;padding:10px;font-size:150%;color:white;float:right;margin-right: 100px;">Logout</a>
        </div><br />
    <center>
        <form action="admin_result.php" method="post" enctype="multipart/form-data">
            <table>
                <tr><td>Event Name</td><td>:</td><td><input type="text" name="event" /></td></tr>    
                <tr><td>Round</td><td>:</td><td><select name="round">
                                                    <option value="1">I</option>
                                                    <option value="2">II</option>
                                                    <option value="3">III</option>
                                                </select></td></tr>
                <tr><td>Result</td><td>:</td><td><input type="file" name="file" /></td></tr>
                <tr><td></td><td></td><td><input type="submit" name="submit" value="Upload"/></td></tr>
            </table>
        </form>
    </center>
    </div>
                    <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
</body>
</html>
<?php } 
else
{
    header('location:admin.php');
}
?>