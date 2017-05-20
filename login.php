<?php 
    if(isset($_POST['log_in']))
    {
        $check=0;
        if(empty($_POST['user']))
        {
            $check=1;
        }
        else
        if(empty($_POST['pass']))
        {
            $check=1;
        }
        if($check==0)
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            if($user="Dextra2014"&&$pass="PeRfEcT1212*%")
            {
                session_start();
                $_SESSION['logged_in']=true;
                header('location:admin.php');
            }
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
    <center>
        <form action="login.php" method="post">
            <table>
                <tr><td>User Name</td><td>:</td><td><input type="text" name="user" /></td></tr>    
                <tr><td>Password</td><td>:</td><td><input type="password" name="pass" /></td></tr>
                <tr><td></td><td></td><td><input type="submit" name="log_in" value="login"/></td></tr>
            </table>
        </form>
    </center>
    </div>
                    <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
</body>
</html>