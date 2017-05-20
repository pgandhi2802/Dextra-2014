<!DOCTYPE html>
<html>
    <head>
        <title>Team</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre|Alegreya+Sans+SC|Hanalei+Fill|Caesar+Dressing|The+Girl+Next+Door|Kite+One|Audiowide|Nunito|Ceviche+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            $(document).ready(function(){
                $(".cleaner").hover(function(){
                    var str='#'+this.id+' .cleaner_details';
                    $(str).css({"height":"300px","background":"rgba(51,102,153,0.7)","text-align":"center","margin-top":"0px","transition":"1s","vertically-align":"bottom","padding":"20px"});
                    },function(){
                    $(".cleaner_details").css({"background":"none","margin-top":"250px","transition":"1s"});
                });
            });
        </script>
    </head>
    <body>
        <div id="dex_wrapper">
        <?php include 'fixed_part/header.php'?>
            <center>
                <div id="sub_menu">
                    <ul>
                        <a href="#sponsor"><li id="show_sponsor" >Sponsors</li></a>
                        <a href="#technical"><li id="show_technical">Technical</li></a>
                        <a href="#editorial"><li id="show_editorial">Editorial</li></a>
                        <a href="#robotics"><li id="show_robotics">Robotics</li></a>
                        <a href="#web_team"><li id="show_web_Team">Web Team</li></a>
                    </ul>
                </div>
            </center>
            <center>
                <div id="wrapper">
                    <div id="dex_content">
                        <center><div id="team">
                            <div id="cleaner1" class="cleaner" style="background:url('team/utkarsh.jpg ') no-repeat;background-size: 100%;"><div class="cleaner_details">Utkarsh Mishra         <br />(4th year)<br />(Chairperson)<br />   <a href="https://www.facebook.com/i.m.utkarsh?fref=ts&ref=br_tf" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner2" class="cleaner" style="background:url('team/piush.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Piush Gupta              <br />(4th year)<br />(Treasurer)<br />     <a href="https://www.facebook.com/piush2806?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <hr />
                            <div class="contact_head" class="team_head" id="sponsor">Publicity & Sponsorship Team</div><br />
                            <div id="cleaner3" class="cleaner" style="background:url('team/pub/kushagra.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Kushagra Kasbi     <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/kushagra.kasbi" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner4" class="cleaner" style="background:url('team/pub/shivangi.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Shivangi Singh    <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/shivangi.singh.1840?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner5" class="cleaner" style="background:url('team/pub/aditya.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Aditya Tiwari       <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/aditya.tiwari.96780?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner6" class="cleaner" style="background:url('team/pub/anvesha.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Anvesha Goyal      <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/anvesha.goyal.3?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner7" class="cleaner" style="background:url('team/pub/pankaj.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Pankaj Chauhan      <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/profile.php?id=100001764832453&fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner8" class="cleaner" style="background:url('team/pub/prachii.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Prachi Swamii       <br />(3rd year)<br />(Manager)<br />      <a href="https://www.facebook.com/profile.php?id=100002536371402&fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner9" class="cleaner" style="background:url('team/pub/suyash.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Suyash Shekhawat    <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/suyash.shekhawat?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner10" class="cleaner" style="background:url('team/pub/tanisha.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Tanisha Sharma           <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/tanisha.sharma.359?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <hr />
                            <div class="contact_head" class="team_head" id="technical">Technical Team</div><br />
                            <div id="cleaner11" class="cleaner" style="background:url('team/tech/paras.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Paras Jain          <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/jainparas811?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner12" class="cleaner" style="background:url('team/tech/shikhar.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Shikhar Prakash      <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/shikhar.prakash.1?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner13" class="cleaner" style="background:url('team/tech/harshit.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Harshit Gupta    <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/nawab.harry?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner14" class="cleaner" style="background:url('team/tech/himanshu.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Himanshu Yadav        <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/hyvess?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner15" class="cleaner" style="background:url('team/tech/shashank.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Shashank Gaurav  <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/shashank.gaurav.71" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner16" class="cleaner" style="background:url('team/tech/shreya.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Shreya Chattopadhyay           <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/shreya.chatterjee.7793?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner17" class="cleaner" style="background:url('team/tech/utkarsh.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Utkarsh Mishra         <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/utkarsh.mishra.319?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <hr />
                            <div class="contact_head" class="team_head" id="editorial">Editorial Team</div><br />
                            <div id="cleaner18" class="cleaner" style="background:url('team/edi/sahil.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Sahil Lamba          <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/lsahil?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner19" class="cleaner" style="background:url('team/edi/abhishek.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Abhishek Joshi    <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/lovermics?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner20" class="cleaner" style="background:url('team/edi/arpita.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Arpita Dixit        <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/arpita.dixit.5?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner21" class="cleaner" style="background:url('team/web/vipul.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Vipul Sharma         <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/vipul.sharma.581187?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner22" class="cleaner" style="background:url('team/edi/navneet.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Navneet Raj Vaish  <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/navneet.r.vaish?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner23" class="cleaner" style="background:url('team/edi/osheen.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Osheen Chitra       <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/osheen.chitra?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner24" class="cleaner" style="background:url('team/edi/tulika.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Tulika Saxena       <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/tulika.saxena.7?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner25" class="cleaner" style="background:url('team/edi/vishal.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Vishal Gupta        <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/vishal.gupta.5437?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <hr />
                            <div class="contact_head" class="team_head" id="robotics">Robotics Team</div><br />
                            <div id="cleaner26" class="cleaner" style="background:url('team/rob/hemant.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Hemant Pathak       <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/iamnotacomputer?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner27" class="cleaner" style="background:url('team/rob/vinita.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Vinita Pancholi     <br />(4th year)<br />(Secretary)<br />     <a href="https://www.facebook.com/vinita.pancholi?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div><br />
                            <div id="cleaner28" class="cleaner" style="background:url('team/rob/ayush.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Ayush Srivatava      <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/meetaayush?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner29" class="cleaner" style="background:url('team/rob/rishav.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Rishabh Tripathi     <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/rishabh1112?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner30" class="cleaner" style="background:url('team/rob/vaishali.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Vaishali Pathak      <br />(3rd year)<br />(Manager)<br />       <a href="https://www.facebook.com/vaishali.pathak.1?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <hr />
                            <div class="contact_head" class="team_head" id="web_team">Web Team</div><br />
                            <div id="cleaner31" class="cleaner" style="background:url('team/web/vipul.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Vipul Sharma         <br />(3rd year)<br />(Web-Designer)<br />     <a href="https://www.facebook.com/vipul.sharma.581187?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                            <div id="cleaner32" class="cleaner" style="background:url('team/web/piyush.jpg') no-repeat;background-size: 100%;"><div class="cleaner_details">Piyush Gandhi       <br />(2nd year)<br />(Co-Web-Designer)<br />  <a href="https://www.facebook.com/p.gandhi2802?fref=ts" target="blank"><img style="width: 40px;height:40px;"src="team/f.jpg" /></a></div></div>
                        </div></center>
                    </div>
		</div>
            </center><br /><br />
        </div>
        <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
    </body>
</html>