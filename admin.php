<?php
session_start();
if($_SESSION['logged_in']){
?>
<html>
    <head>
        <title>Result Upload</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <style>
            center a{
                color:white;
                background:lightseagreen;
                font-size:150%;
                padding:10px;
            }
        </style>
    </head>
<body>
    <div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
        <div id="logout" style="display:block;width:100%;height: 70px;">
            <a href="logout.php" style="background:#678;padding:10px;font-size:150%;color:white;float:right;margin-right: 100px;">Logout</a>
        </div><br />
    <center>
        <a href="admin_result.php">Add A result</a><br /><br /><br />
        <a href="admin_update.php">Add An Update</a>
    </center>
    </div>
                    <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
</body>
</html>
<?php }
else
{
    header('location:login.php');
}?>