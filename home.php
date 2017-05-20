<?php
    include'fixed_part/connect.php';
?><!DOCTYPE html>
<html>
    <head>
        <title>Dextra 2014 | from infinitesimal to infinity</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/try.css" />        
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Quintessential|Metal+Mania|Sofadi+One|Lemon|Amarante' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="scripts/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="cstm_js/update.js" charset="utf-8"></script>
    </head>
    <body>
        <div id="wrapper">
<!--        <div id="updates_but">
            <center>Updates</center>
        </div>-->
<!--        <div id="updates">
            <nav style="float:right;margin-left:-15px;margin-top:5px;"id="updates_close"><img style="width:30px;"src="images/bullets/close.png" /></nav>
            <div id="updates_content">
                <?php
                    $query="select * from updates";
                    $result=  mysqli_query($con, $query);
                    while($row=mysqli_fetch_array($result))
                    {
                        	echo '<a href="'.$row['link'].'">'.$row['statement'].'</a><hr />';
                    }
                ?>
            </div>
        </div>-->
        <div id="bullets">
            <center><b><a href="register.php"><div id="register">R<br />e<br />g<br />i<br />s<br />t<br />e<br />r</a></b></center>
            <!--<center><b><a href="results.php"><div class="results" id="register">R<br />e<br />s<br />u<br />l<br />t<br />s<br /></a></b></center>-->
            <center><b><a href="results.php"><div id="register">R<br />e<br />s<br />u<br />l<br />t<br />s<br /></a></b></center>
            <center><b><a href="schedule.pdf" target="_blank"><div id="register" style="background-color:steelblue;">s<br />c<br />h<br />e<br />d<br />u<br />l<br />e</a></b></center>
        </div>
        <header>
            <a href="http://www.jiet.ac.in/" target="_blank"><img id="juet" src="images/logo/juet.png" /></a>
            <img id ="isf" src="images/logo/isf_logo.png" />
            <center><img id="dextra" style="height: 180px;"src="images/logo/dextra_logo1.png" /></center>
        </header>
            <center>
                <div id="home_wrapper">
            <center><a href="event.php" id="cir1" class="circle" ><br /><p>Events</p></a>
            <a href="sponsor.php" id="cir2" class="circle"><br /><p>Sponsors</p></a>
            <a href="gallery.php" id="cir3" class="circle"><br /><p>Gallery</p></a>
            <a href="team.php" id="cir4" class="circle"><br /><p>Team</p></a>
            <a href="about.php" id="cir5" class="circle"><br /><p>About Us</p></a>
            <a href="contact.php" id="cir6" class="circle"><br /><p>Contact Us</p></a></center>
        </div>
            </center>
            <br />
        <div id="wrapper2">
            <div class="bar" id="bar3">
            <div id="updates_content">
                <marquee behavior="scroll" direction="up" scrollamount="5" >
                <?php
                    $query="select * from updates";
                    $result=  mysqli_query($con, $query);
                    while($row=mysqli_fetch_array($result))
                    {
                        	echo '<a href="'.$row['link'].'">'.$row['statement'].'</a><hr />';
                    }
                ?>
                </marquee>
            </div>
            </div>
            <div class="bar" id="bar1">
                <script type="text/javascript" src="cstm_js/counter.js" charset="utf-8"></script>
                <center><div id="fest_date"><span>25-27</span>April,2014</div></center>
                <div id="count_wrapper">
                        <div class="count_wrap" id="cd_days"></div>
                        <div class="count_wrap" id="cd_hours"></div>
                        <div id="cd_minutes" class="count_wrap"></div>
                        <div id="cd_seconds" class="count_wrap"></div>
                </div></center>
                <br /><br />
                <div id="count_qoutes"class="count_wrap"><center><p>To Go....</p></center></div>
                </div>
            <script type="text/javascript" src="cstm_js/fb_script.js" ></script>
            <center class="bar" id="bar2"><div class="fb-like-box" data-href="https://www.facebook.com/DextraJUET" data-width="240" data-height="240" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div></center>
        </div>
        </div>
        <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
    </body>
</html>