// Block for stat
<?php 
session_start();
$role = "statician";
if (!empty($_SESSION['sun'])) {
    if ($_SESSION['srole'] != $role) header('location: denied.php'); 
    if ($_SESSION['status'] != "active") header('location: blocked.php');
}
else {
    header("location: logout.php");
}
?><?php 
include('connection.php');
require_once __DIR__ . '/vendor/autoload.php';

?>

<html> 
    <link  href="mystyles.css" rel="stylesheet" type="text/css"/>
        <!--INCLUDING THE TOP AND SIDE NAVIGATIONS OF THE PROJECT-->
    <div id="divHeader"><img src="image/main.jpg" height="80"width="1222" border="8px" border="20px;""></div>
    <div id="divNav">
    <?php
    require("staticianmenu.php");
    ?></div>

    <td>
        <div id="divSideContentLeft">
            <?php
                require("statmenu2.php");
            ?>
        </div>
    </td>

    <!--END INLUDING NAVIGATIONS-->
    <style>
            form {
                width: 300px;
                margin: auto;
                border: 1px solid #ccc;
                padding: 10px;
                border-radius: 5px;
                display: block;
                margin-bottom: 100px;
            }
            select, input {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }
    </style>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="transform: translate(100px,-680px);">
        <lable for="id">divorce Id: </lable>
        <input type="text" id="id" name="id"> 
        <input type="Submit">
    </form>

</html>

<?php 

    $result = null;

function generatedivorceCertificate($divorceId, $con) {

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $divorceid = $_POST['id'];
    // Fetch data from the divorce table.
    $sql = "SELECT * FROM divorce WHERE divorceid = '$divorceid'";

    $result = mysql_query($sql);

    if ($result) {
        $row = mysql_fetch_assoc($result);
        $divorceMonth = date("F", $row['divorcedate']);
        $divorceDate = date("d", $row['divorcedate']);
        $divorceYear = date("Y", $row['divorcedate']);
        // Format the divorce certificate
        $divorceCertificate = <<<HTML
                <html lang="en">

                <head>
                    <title>Divorce Certificate</title>
                    <style>
                        #container-wrap:before {
                            content: ' ';
                            display: block;
                            position: absolute;
                            left: 0;
                            top: 0;
                            margin: auto;
                            width: 100%;
                            height: 100%;
                            opacity: 0.1;
                            background-image: url('http://localhost/vms/image/noise.png');
                            background-repeat: no-repeat;
                            background-position: 50% 0;
                            background-size: cover;
                            overflow: hidden;
                        }

                        #container {
                            height: 500px;
                            width: 1000px;
                            margin: auto;
                            padding: 10px;
                            border: 18px solid #0077b6;
                            position: relative;
                            background: #a3b18a6c;
                        }

                        #head {
                            height: 20%;
                            width: 100%;
                            display: flex;
                            flex-direction: row;
                            justify-content: space-between;
                        }

                        #head img {
                            height: 100%;
                        }

                        #head p {
                            font-size: 65%;
                        }

                        #head>div:nth-child(1) {
                            width: 100%;
                            height: 50%;
                            display: flex;
                            flex-direction: row;
                            justify-content: space-around;

                        }

                        #head>div:nth-of-type(2) {
                            width: 100%;
                            height: 50%;
                            display: flex;
                            flex-direction: row;
                            justify-content: space-around;
                        }

                        #flag {
                            width: 55%;
                            display: flex;
                            justify-content: center;
                            align-items: end;
                            align-content: end;
                            flex-wrap: wrap-reverse;

                        }

                        #flag img {
                            height: 100%;
                            margin: auto;
                        }


                        #regnumbers p {
                            font-size: 60%;
                            font-family: roboto;
                            font-weight: bold;
                            margin-left: 10%;
                        }

                        #birthnumbers p {
                            font-size: 60%;
                            font-family: roboto;
                            font-weight: bold;
                            margin-left: 10%;
                        }


                        #top {
                            width: 100%;
                            height: 20%;
                            display: flex;
                            justify-content: space-between;
                        }

                        #husbandphoto,
                        #wifephoto {
                            height: 100%;
                            width: 10%;
                            border: 3px solid black;
                        }

                        #toptext p {
                            font-weight: bolder;
                            font-family: roboto;
                            text-align: center;
                        }

                        #couple {
                            padding: 20px 0;
                            padding-bottom: 0px;
                            width: 100%;
                            display: flex;
                            justify-content: space-between;
                        }

                        #couple > div {
                            width: 49%;
                        }

                        #wife span,
                        #husband span {
                            white-space: nowrap;
                            font-size: 80%;


                        }

                        .crows {
                            width: 80%;
                            white-space: nowrap;
                            display: flex;
                            padding: 10px 10px;
                            justify-content: space-between;
                        }

                        #fields {
                            height: 70%;
                            width: 100%;

                        }

                        #fields div {
                            transform: scale(0.8) translateX(-60px);
                        }

                        .rows {
                            max-width: 100%;
                            padding: 7px 10px;
                            display: flex;
                        }

                        .rows:last-of-type {
                            justify-content: space-between;
                            padding-top: 20px;

                        }

                        .field {
                            white-space: nowrap;
                            margin-right: 20px;
                        }

                        .value {
                            font-size:85%;
                            text-decoration: underline;
                            text-transform: uppercase;
                        }
                    </style>
                </head>

                <body>
                    <div id="container">
                        <div id="head">
                            <div id="ethiopia">
                                <img src="http://localhost/vms/image/ethiopia.png">
                                <div>
                                    <p>Divorce Register Form Number_________________________________</p>
                                    <p>Divorce Registration Unique Identification No.________________________</p>
                                </div>
                            </div>
                            <div id="oromia">
                                <div>
                                    <p>Wife Birth Registration Idenfification No._________________________________</p>
                                    <p>Husband Birth Registration Idenfification No.______________________________</p>
                                </div>
                                <img src="http://localhost/vms/image/oromia.png">
                            </div>
                        </div>
                        <div id="top">
                            <div id="wifephoto">
                                <img>
                            </div>
                            <div id="toptext">
                                <p>Federal Democratic Republic of Ethiopia Vital Event Registration</p>
                                <p>Divorce Certificate</p>
                            </div>
                            <div id="husbandphoto">
                                <img>
                            </div>
                        </div>
                        <div id="couple">
                            <div id="wife">
                                <div class="crows">
                                    <span class="field">maqaa haadha manaa: <span class="value">{$row['wifefname']}</span></span>
                                    <span class="field">Maqaa Abbaa: <span class="value">{$row['wifelname']}</span></span>
                                    <span class="field">Maqaa Akaakayyuu: <span class="value">____________</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Guyyaa Dhalootaa Ji'a: <span class="value">______________</span></span>
                                    <span class="field">Guyyaa: <span class="value">____</span></span>
                                    <span class="field">Waggaa: <span class="value">______</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Biyya Dhalootaa: <span class="value">___________</span> Naannoo:<span class="value">_______</span> Magaalaa<span class="value">_______</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Zoonii: <span class="value">_________</span> </span>
                                    <span class="field">Nationality: <span class="value">__________</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Guyyaa Wal Hiikuu Ji'a: <span class="value">$divorceMonth</span></span>
                                    <span class="field">Guyyaa: <span class="value">$divorceDate</span></span>
                                    <span class="field">Waggaa: <span class="value">$divorceYear</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Guyyaa Galmee Hiikaa Ji'a: <span class="value">_________</span></span>
                                    <span class="field">Guyyaa: <span class="value">___</span></span>
                                    <span class="field">Waggaa: <span class="value">___</span></span>
                                </div>
                            </div>
                            <div id="husband">
                                <div class="crows">
                                    <span class="field">Maqaa abbaa warraa: <span class="value">{$row['hasbandfname']}</span></span>
                                    <span class="field">Maqaa Abbaa: <span class="value">{$row['hasbandlname']}</span></span>
                                    <span class="field">Maqaa Akaakayyuu: <span class="value"></span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Guyyaa Dhalootaa Ji'a: <span class="value">__________</span></span>
                                    <span class="field">Guyyaa: <span class="value"></span>___</span>
                                    <span class="field">Waggaa: <span class="value">___</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Biyya Dhalootaa: <span class="value">___________</span> Naannoo: <span class="value">__________</span> Magaalaa: <span class="value">_______</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Zoonii: <span class="value">_________</span> </span>
                                    <span class="field">Nationality: <span class="value">_______</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Bakka Wal Hiikuu: <span class="value">{$row['divorceregion']} {$row['divorceworeda']} {$row['divorcecity']}</span></span>
                                </div>
                                <div class="crows">
                                    <span class="field">Guyyaa Waraqaa Ragaa Kenname Ji'a:<span class="value">____________</span></span>
                                    <span class="field">Guyyaa: <span class="value">_____</span></span>
                                    <span class="field">Waggaa: <span class="value">_____</span></span>
                                </div>
                            </div>
                        </div>
                        <div id="fields">
                            <div class="rows">
                                <span class="field">Maqaa Guutuu Qondala Galmee
                                    Kabajaa:_____________________________________________</span>
                                <!-- <span class="field">Seal:</span></span> -->
                            </div>
                        </div>
                        <div id="container-wrap"> </div>
                    </div>
                </body>

                </html>
HTML;

        echo $divorceCertificate;
    } else {
        echo "Divorce ID not found: " . mysql_error();
    }

    $filePath = 'C:/xampp/htdocs/vms/reports/divorcecert.html';
    $filePathJS = 'http://localhost/vms/reports/divorcecert.html';

    // Write the HTML content to the file
    file_put_contents($filePath, $divorceCertificate);
    echo "<script>window.open('$filePathJS', '_blank');</script>";

    mysql_free_result($result);

} 
?>
