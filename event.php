<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="p.gandhi2802@yahoo.in">
        <title>Events </title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="cstm_js/event.js"></script>
    </head>
    <body>
        <div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
            <div id="wrapper">
            <center>
                <div id="tag">
                    <div class="tag_lines" id="techno_tag"><p><i>"It is not the will to win that makes you a winner, but the will to prepare to win which does."</i></p>
                        <p style="text-align:justify;"><i>Illuminating every nook and corner dextra with its broad spectrum of events gives you an opportunity to pamper yourself with a plethora of mind boggling events. With events both sedentary as well as dynamic dextra has much to quench your thirst .So do join us for an enriching experience.</i></p>
                    </div>
                    <div class="tag_lines" id="workshop_tag">
                        <p><i>“The true sign of intelligence is not knowledge but imagination”</i>  (By:-  Albert Einstein)</p>
                        <p style="text-align:justify;"><i>Do you see yourself as the next big thing in the technical fraternity ?Or you want to share your ideas with like minded people then workshops at dextra is the best thing that can happen to you.Workshops here will not only sprout your unconscious thoughts but also reverberate your mind towards the creation of never-seen before masterpieces. So join us for an  enjoyable and enriching experience.</i></p>
                    </div>
                    <div class="tag_lines" id="dpl_tag"><p><i>“All work and no play makes jack a dull boy”</i></p>
                        <p style="text-align:justify;"><i>Concomitant with the spirit of Ipl here in dextra we are ready to accompany you to some fun filled evenings .So do join us for an unforgettable experience. </i></p>
                    </div>
                    <div class="tag_lines" id="techno_fun_tag"><p><i>“Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.”</i>  (-Albert Schweitzer)</p>
                        <p style="text-align:justify;"><i>Blending technology with fun has never been easy ,so why  not give it a try this dextra .So do join us because we have much to unearth together.</i></p>
                    </div>
                    <div class="tag_lines" id="media_events_tag"><p><i>You don't take a photograph, you make it.</i>(Ansel Adams)</p>
                        <p style="text-align:justify;"><i> Are you Ready to capture every trice this dextra through carl zeiss lens? Then nothing will elate you more than our media events so be ready with you tripod and do join us for a captivating experience.</i></p>
                    </div>
                    <div class="tag_lines" id="fun_tag"><p><i>Man needs, for his happiness, not only the enjoyment of this or that, but hope and enterprise and change.</i>(Bertrand Rusell)</p>
                        <p style="text-align:justify;"><i>To cater to the whims and fancies of fun loving souls we here in dextra have much to offer.So do join us for lively days and amusing evenings.</i></p>
                    </div>
                </div>
            </center>
        <center>
            <div id="selector">
                    <div class="selector_bar" id="techno"><br /><h2>Techno</h2><br />Prepare To Be Challenged</div>
                    <div class="selector_bar" id="techno_fun"><br /><h2>Techno Fun</h2><br />Whats Learning Without Fun<h3></h3></div>
                    <div class="selector_bar" id="workshop"><br /><h2>Workshop</h2>Learn More Grow More</div>
                    <div class="selector_bar" id="media_events"><br /><br /><h2>Media Events</h2><br /></div>
                    <div class="selector_bar" id="fun"><br /><br /><h2>Fun</h2><br /></div>
                    <div class="selector_bar" id="dpl"><br /><br /><h2>DPL</h2><br /></div>
            </div>
        </center>
            <center>
            <div id="timeline">
                <?php
                    $count=1;
                    $dir = "events/techno/images/";
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
                                    $file_name = basename($file, ".jpg");
                                    if($count%2==1){ ?>
                                        <div class="techno">
                                            <div class="left_block">
                                                <a href="events/techno/<?php echo $file_name.'.html';?> "><img class="left" src="events/techno/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php include'events/techno/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }
                                    else
                                    {?>
                                        <div class="techno">
                                            <div class="right_block">
                                                <a href="events/techno/<?php echo $file_name.'.html';?> "><img class="right" src="events/techno/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php include'events/techno/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }$count++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
                    $count=1;
                    $dir = "events/techno_fun/images/";
// Open a directory, and read its contents
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
                                    $file_name = basename($file, ".jpg");
                                    if($count%2==1){ ?>
                                        <div class="techno_fun">
                                            <div class="left_block">
                                                <a href="events/techno_fun/<?php echo $file_name.'.html';?> "><img class="left" src="events/techno_fun/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php include'events/techno_fun/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }
                                    else
                                    {?>
                                        <div class="techno_fun">
                                            <div class="right_block">
                                                <a href="events/techno_fun/<?php echo $file_name.'.html';?> "><img class="right" src="events/techno_fun/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php include'events/techno_fun/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }$count++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
                    $count=1;
                    $dir = "events/workshop/images/";
// Open a directory, and read its contents
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
                                    $file_name = basename($file, ".jpg");
                                    if($count%2==1){ ?>
                                        <div class="workshop">
                                            <div class="left_block">
                                                <a href="events/workshop/<?php echo $file_name.'.html';?> "><img class="left" src="events/workshop/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php include'events/workshop/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }
                                    else
                                    {?>
                                        <div class="workshop">
                                            <div class="right_block">
                                                <a href="events/workshop/<?php echo $file_name.'.html';?> "><img class="right" src="events/workshop/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php include'events/workshop/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }$count++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
                    $count=1;
                    $dir = "events/fun/images/";
// Open a directory, and read its contents
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
                                    $file_name = basename($file, ".jpg");
                                    if($count%2==1){ ?>
                                        <div class="fun">
                                            <div class="left_block">
                                                <a href="events/fun/<?php echo $file_name.'.html';?> "><img class="left" src="events/fun/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php include'events/fun/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }
                                    else
                                    {?>
                                        <div class="fun">
                                            <div class="right_block">
                                                <a href="events/fun/<?php echo $file_name.'.html';?> "><img class="right" src="events/fun/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php include'events/fun/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }$count++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                                <?php
                    $count=1;
                    $dir = "events/media_events/images/";
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
                                    $file_name = basename($file, ".jpg");
                                    if($count%2==1){ ?>
                                        <div class="media_events">
                                            <div class="left_block">
                                                <a href="events/media_events/<?php echo $file_name.'.html';?> "><img class="left" src="events/media_events/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php include'events/media_events/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }
                                    else
                                    {?>
                                        <div class="media_events">
                                            <div class="right_block">
                                                <a href="events/media_events/<?php echo $file_name.'.html';?> "><img class="right" src="events/media_events/images/<?php echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php include'events/media_events/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>
                                    <?php }$count++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
//                    $count=1;
//                    $dir = "events/dpl/images/";
//// Open a directory, and read its contents
//                    if (is_dir($dir)){
//                        if ($dh = opendir($dir)){
//                            while (($file = readdir($dh)) !== false){
//                                if(!($file=='.'||$file=='..'||$file=='sort_review'||$file=='.htaccess')){ 
//                                    $file_name = basename($file, ".jpg");
//                                    if($count%2==1){ ?>
<!--                                        <div class="dpl">
                                            <div class="left_block">
                                                <a href="events/dpl/<?php // echo $file_name.'.html';?> "><img class="left" src="events/dpl/images/<?php // echo $file;?>" /></a>
                                            </div>
                                            <div class="right_block">
                                                <article class="right"><?php // include'events/dpl/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>-->
                                    <?php // }
//                                    else
//                                    {?>
<!--                                        <div class="dpl">
                                            <div class="right_block">
                                                <a href="events/dpl/<?php // echo $file_name.'.html';?> "><img class="right" src="events/dpl/images/<?php // echo $file;?>" /></a>
                                            </div>
                                            <div class="left_block">
                                                <article class="left"><?php // include'events/dpl/sort_review/'.$file_name.'.art'; ?></article>
                                            </div>
                                        </div>-->
                                    <?php // }$count++;
//                                }
//                            }
//                            closedir($dh);
//                        }
//                    }
                    ?>
<div class="dpl" style="height: 700px">
    <a href="events/dpl/dpl.html"><img style="width: 960px;height: 640px;"src="events/dpl/images/dpl.jpg" /></a>
</div>
                </div>
            </center>
            </div>
        </div>
        <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
    </body>
</html>