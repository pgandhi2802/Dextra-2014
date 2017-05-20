<?php
    include 'fixed_part/connect.php';
    $query_list='select * from results order by id desc';
    $list_results=  mysqli_query($con, $query_list);
    
    if(!isset($_GET['rslt']))
    {
        $check=0;
    }
    else
    {
        $file_name='results/'.$_GET['rslt'];
        if (file_exists($file_name)) 
        {
            $check=1;
        } else 
        {
            $check=0;
        }   
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Results</title>
        <link rel="shortcut icon" href="dextra.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scroll_css.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/result.css" />
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre|Alegreya+Sans+SC|Hanalei+Fill|Caesar+Dressing|The+Girl+Next+Door|Kite+One|Audiowide|Nunito|Ceviche+One' rel='stylesheet' type='text/css'>
        <style>
            header ul{
                margin-right: 0px;
                margin-top:25px;
            }
        </style>
        <script src="scripts/show_hide.js"></script>
    </head>
    <body>
        <div id="dex_wrapper">
        <?php include 'fixed_part/header.php';?>
            <div class="container">
                <?php if($check==1)
                { ?>
                <div id="result">
                    <div class="side_bar" id="result_side1"style="width: 300px;">
                        <?php
                        while($row=  mysqli_fetch_array($list_results))
                                {
                                    echo '<a href="results.php?rslt='.$row['file_name'].'">'.$row['name'].'</a>';
                                }
                                ?>
                    </div>
                    <div class="side_bar" style="padding: 10px;font-family: sans-serif;font-size: 120%;float:right;width: 655px;">
                        <?php
echo '<table>';
$row = 0;
if (($handle = fopen("$file_name", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        if($row==1)
        {
            echo '<tr>';
            for ($c=0; $c < $num; $c++) 
            {
                echo '<th>'.$data[$c] . "</th>";
            }
            echo '</tr>';
        }
        else
        {
            echo '<tr>';
            for ($c=0; $c < $num; $c++) 
            {
                echo '<td>'.$data[$c] . "</td>";
            }
            echo '</tr>';
        }
    }
    fclose($handle);
}
echo '</table>';
?>
                    </div>
                </div>
                <?php } 
                else
                { ?>
                    <div id="result">
                    <div class="side_bar" id="result_side1"style="width: 100%; border:none;">
                        <center>
                            <?php
                                while($row=  mysqli_fetch_array($list_results))
                                {
                                    echo '<a href="results.php?rslt='.$row['file_name'].'">'.$row['name'].'</a>';
                                }
                            ?>
                        </center>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
            <?php include 'fixed_part/footer.php';?>
        <script src="scripts/right_click_disable.js"></script>
	</body>
</html>