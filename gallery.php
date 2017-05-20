<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Gallery</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre|Alegreya+Sans+SC|Hanalei+Fill|Caesar+Dressing|The+Girl+Next+Door|Kite+One|Audiowide|Nunito|Ceviche+One' rel='stylesheet' type='text/css'>
        <style>
            header ul{
                margin-right: 0px;
                margin-top:25px;
            }
        </style>
        <script type="text/javascript" src="scripts/jquery-1-4-2.min.js"></script> 
        <script type="text/javascript" src="scripts/jquery-ui.min.js"></script> 
        <script type="text/JavaScript" src="scripts/slimbox2.js"></script> 
        <script>
            $(document).ready(function(){
             $(".gallery img").css({"height":"180px","width":"180px","transition":"1s"});
        });
        </script>
        <script src="scripts/modernizr.custom.63321.js"></script>
    </head>
    <body>
        <div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
            <div class="container">	
                <section class="main">
                    <ul id="st-stack" class="st-stack-raw">
                    <?php 
                        $dir = "images/gallery/main";
                            if (is_dir($dir))
                            {
                                if ($dh = opendir($dir))
                                {
                                    while (($file = readdir($dh)) !== false)
                                    {
                                        if(!($file=='.'||$file=='..'||$file=='.htaccess'))
                                        { ?>
                            <li><div class="st-item"><img src="images/gallery/main/<?php echo $file; ?>" ></div><div class="st-title"></div></li>
                                <?php
                                        }   
                                    }
                                closedir($dh);
                                }
                            }
                ?>
                        </ul>
                    </section>
		</div>
                <script type="text/javascript" src="scripts/jquery-min.js"></script>
		<script type="text/javascript" src="scripts/jquery.stackslider.js"></script>
		<script type="text/javascript">
			$( function() {
				$( '#st-stack' ).stackslider();
			});
		</script>
                <center>
                    <div id="dex_content">
                        <div id="dex_gallery">
<?php
                            if(!isset($_GET['page']))
                                $var=1;
                            else 
                                $var=$_GET['page'];
                            $min=$var*20-19;
                            $max=$var*20;
                            $i=$min;
                            $count=0;
                            $dir = 'images/gallery/';
                            if ($handle = opendir($dir)) 
                            {
                                while (($file = readdir($handle)) !== false)
                                {
                                    if(!($file=='.'||$file=='..'||$file=='main'||$file=='.htaccess'))
                                    {
                                        $count++;
                                        if($count>=$min&&$count<=$max)
                                        {
?>
                                            <div class="gallery" class="col one_fourth gallery_box">
                                                <a class="image<?php echo $rot=rand(10,80)%5;?>" href="images/gallery/<?php echo $file; ?>" rel="lightbox[portfolio]">
                                                    <img  class="image<?php echo $rot;?>"src="images/gallery/<?php echo $file; ?>" alt="Image 01" class="image_frame" />
                                                </a>
                                            </div>
<?php

                                        }
                                    }
                                }
                            }
?>
                    </div>
                    <ul>
<?php 
                $i_count=0;
                while(($i_count*20)<$count)
                {
                    if($i_count+1==$var){
?>
                        <li><a href="?page=<?php echo $i_count=$i_count+1;?>" id="curr_page" > <?php echo $i_count;?> </a> </li>
                <?php } 
                else
                { ?>
                        <li><a href="?page=<?php echo $i_count=$i_count+1;?>" > <?php echo $i_count;?> </a> </li>
                <?php           } }?>
                    </ul>
            </div></center><br /><br />
            </div>
            <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
	</body>
</html>