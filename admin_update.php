<?php
include 'fixed_part/connect.php';
session_start();
if(isset($_SESSION['logged_in']))
{
    if(isset($_POST['submit']))
    {
        $line=$_POST['line'];
        $link=$_POST['link'];
        $query_update="insert into updates(statement,link)values('$line','$link')";
        $result=mysqli_query($con,$query_update);
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
        <form action="admin_update.php" method="post" enctype="multipart/form-data">
            <table>
                <tr><td>Update Line</td><td>:</td><td><input type="text" name="line" required/></td></tr>    
                <tr><td>Update Link</td><td>:</td><td><input type="text" name="link" required/></td></tr>
                <tr><td></td><td></td><td><input type="submit" name="submit" value="Update"/></td></tr>
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