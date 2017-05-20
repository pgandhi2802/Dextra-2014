<?php
    include 'fixed_part/connect.php';
    $errstate=$errcty=$errfname=$errlname=$erremail=$errcontact=$errenroll=$errcol=$errbrnch="";
    $check=0;
    if(isset($_POST['sign_up']))
    {
        if(!empty($_POST['first_name']))
        {
            $fname =$_POST["first_name"];
            if(!preg_match("/^[a-zA-Z ]*$/",$fname))
            {
                $errfname = "Only letters allowed"; 
                $check=1;
            }
        }
        else
        {
            $errfname = "Required Field"; 
            $check=1;
        }
        if(!empty($_POST['other_branch']))
        {
            $branch =$_POST["other_branch"];
            if(!preg_match("/^[a-zA-Z ]*$/",$branch))
            {
                $errbrnch = "Only letters allowed"; 
                $check=1;
            }
        }
        else
        {
            if(empty($_POST['branch'])||$_POST['branch']=='')
            {
                $errbrnch = "Required Field";
                $check=1;
            }
        }
        if($_POST['state']=='')
        {
            $errstate = "Required Field";
            $check=1;
        }
        if(!empty($_POST['enroll']))
       {
            $enroll =$_POST["enroll"];
            $sql="select * from register where enroll='$enroll'";
            $query=mysqli_query($con,$sql);
            $check2=mysqli_num_rows($query);
            if($check2!=0)
            {
                $errenroll="enroll already registered";
                $check=1;
            }
        }
        else
        {
            $errenroll = "Required Field"; 
            $check=1;
        }
        if(!empty($_POST['city']))
        {
            $city =$_POST["city"];
            if(!preg_match("/^[a-zA-Z ]*$/",$fname))
            {
                $errcty = "Only letters allowed"; 
                $check=1;
            }
        }
        else
        {
            $errcty = "Required Field"; 
            $check=1;
        }
        if(!empty($_POST['college']))
        {
            $col =$_POST["college"];
            if(!preg_match("/^[a-zA-Z ]*$/",$col))
            {
                $errcol = "Only letters allowed"; 
                $check=1;
            }
        }
        else
        {
            $errcol = "Required Field"; 
            $check=1;
        }
        if(!empty($_POST['last_name']))
        {
            $lname =$_POST["last_name"];
            if(!preg_match("/^[a-zA-Z ]*$/",$lname))
            {
                $errlname = "Only letters allowed"; 
                $check=1;
            }
        }
        else
        {
            $errlname = "Required Field"; 
            $check=1;
        }
        
       if(!empty($_POST['email']))
       {
            $email =$_POST["email"];
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
            {
                $erremail = "Invalid email format";
                $check=1;
            }
            $sql="select * from register where email='$email'";
            $query=mysqli_query($con,$sql);
            $check2=mysqli_num_rows($query);
            if($check2!=0)
            {
                $erremail="email already exists";
                $check=1;
            }
        }
        else
        {
            $erremail = "Required Field"; 
            $check=1;
        }
        if(!empty($_POST['contact']))
        {
            $contact=$_POST['contact'];
            if(preg_match("/d{10}/",$contact))
            {
                $errcontact="invalid no.";
                $check=1;
            }
            if(strlen($contact)!=10)
            {
                $errcontact="invalid no.";
                $check=1;
            }
        }
        else
        {
            $errcontact = "Required Field"; 
            $check=1;
        }
        if($check==0)
        {
            $fname=$_POST['first_name'];
            $lname=$_POST['last_name'];
            $gender=$_POST['gender'];
            $college=$_POST['college'];
            if(!empty($_POST['branch']))
                $branch=$_POST['branch'];
            else
                $branch=$_POST['other_branch'];
            $enroll=$_POST['enroll'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $query1="select max(id) from register";
            $result1=mysqli_query($con,$query1);
            while($row=  mysqli_fetch_array($result1)){$id=$row['max(id)'];}
            $query2="insert into register(fname,lname,gender,college,branch,enroll,contact,email,city,state)values('$fname','$lname','$gender','$college','$branch','$enroll','$contact','$email','$city','$state')";
            $result2=mysqli_query($con,$query2);
            if($result2)
                $done=1;
            $query3="select id from register where enroll='$enroll' and email='$email'";
            $result3=  mysqli_query($con,$query3);
            $uni_id_no=  mysqli_fetch_assoc($result3);
            $uni_id='dex'.$uni_id_no['id'];
            $query4="update register set uni_id='$uni_id' where enroll='$enroll' and email='$email'";
            $result3=  mysqli_query($con,$query4);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dextra 2014</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre|Alegreya+Sans+SC|Hanalei+Fill|Caesar+Dressing|The+Girl+Next+Door|Kite+One|Audiowide|Nunito|Ceviche+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
function CheckBranch(val){
    var element=document.getElementById('branch');
    if(val=='OTHER')
        element.style.display='block';
    else  
        element.style.display='none';
    }

</script> 
<style>
    #dex_content{
        width:910px;
    }
    form{
        float:left;
    }
    #information{
        float:right;
        text-align:justify;
    }
    #done_message{
        float:left;
    }
    ul{
        width:400px;
    }
</style>
    </head>
    <body>
	<div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
		<center>
                    <div id="dex_content">
                            <?php if(isset($done))
                    { ?>
                        <div class="reg" id="done_message">
                            <div class="done_message">You have Sucessfully Registered</div>
                            <div class="done_message">Your unique id=<?php echo $uni_id; ?></div>
                        </div>
              <?php }
                    else
                    {
?>
                    <form class="reg" action="<?php echo $_SERVER["PHP_SELF"];?>"  method="post">
                        <table border="0">
                            <tr><td>First Name</td><td>:</td><td><input type="text" name="first_name"/><br /><div id="error2"><?php echo $errfname; ?></div></td></tr>
                            <tr><td>Last Name</td><td>:</td><td><input type="text" name="last_name"/><br /><div id="error2"><?php echo $errlname; ?></div></td></tr>
                            <tr><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="male" checked>Male</br><input type="radio" name="gender" value="female" >Female</td></tr>
                            <tr><td>College</td><td>:</td><td><input type="text" name="college"/><br /><div id="error2"><?php echo $errcol; ?></div></td></tr>
                            <tr><td>Branch</td><td>:</td><td><select name="branch" onchange='CheckBranch(this.value);'>
                                                                <option value="" ></option>
                                                                <option value="CSE">CSE</option>
                                                                <option value="ECE">ECE</option>
                                                                <option value="MECH">Mech</option>
                                                                <option value="CIVIL">Civil</option>
                                                                <option value="CHEM">Chem</option>
                                                                <option value="OTHER">Other</option>
                                                            </select>
                                                    </td></tr>
                            <tr><td></td><td></td><td><input type="text" name="other_branch" id="branch" style='display:none;'/><div id="error2"><?php echo $errbrnch;?></div></td></tr>
                            <tr><td>Enrollment No.</td><td>:</td><td><input type="text" name="enroll"/><br /><div id="error2"><?php echo $errenroll; ?></div></td></tr>
                            <tr><td>City</td><td>:</td><td><input type="text" name="city"/><br /><div id="error2"><?php echo $errcty; ?></div></td></tr>
                            <tr><td>State</td><td>:</td><td><select name="state">
                                        <option value=""></option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Orissa">Orissa</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamilnadu">Tamilnadu</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttaranchal">Uttaranchal</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Pondicherry">Pondicherry</option>
                                                        </select><br /><div id="error2"><?php echo $errstate; ?></div>
                                                    </td></tr>
                            <tr><td>Contact no. </td><td>:</td><td><input type="text" name="contact"/><br /><div id="error2"><?php echo $errcontact; ?></div></td></tr>
                            <tr><td>Email</td><td>:</td><td><input type="text" name="email"/><br /><div id="error2"><?php echo $erremail; ?></div></td></tr>
                            <tr><td></td><td></td><td><input type="submit" name="sign_up" value="Signup" /></td</tr>
                        </table>
                    </form> <?php }?>
                        <div class="reg" id="information">
                            <b><u>REGISTRATION INFORMATION</u>:-</b>
                            <ul>
                                <li>Total Registration Fees : 1000 INR for 3 days stay</li>
                                <li>Security Deposit : 100 INR (Refundable)</li>
                                <li>Registration fees includes Fooding and Lodging charges for 3 days in University campus.</li>
                            </ul>
                            <br />
                            <b><u>ACCOMODATION INFORMATION</u>:-</b>
                            <ul>
                                <li>For participants from other colleges we provide accommodation facility in our hostels.</li>
                                <li>Separate accommodation and decent mess facilities for boys and girls.</li>
                            </ul>
                            <br />
                            <b><u>For Further Information Contact</u>:-</b>
                            <table>
                                <tr><td>Piush Gupta</td><td>:</td><td>8989835253</td></tr>
                                <tr><td>Vishal Gupta</td><td>:</td><td>9479303007</td></tr>
                                <tr><td>Osheen chitra</td><td></td><td></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </center><br /><br />
                    <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
	</body>
</html>