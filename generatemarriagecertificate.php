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
        <lable for="id">Marriage Id: </lable>
        <input type="text" id="id" name="id"> 
        <input type="Submit">
    </form>

</html>

<?php 

    $result = null;

function generatemarriageCertificate($marriageId, $con) {

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marriageid = $_POST['id'];
    // Fetch data from the Marriage table.
    $sql = "SELECT * FROM marriagetable WHERE marriageid = '$marriageid'";
    $result = mysql_query($sql);

    if ($result) {
        $row = mysql_fetch_assoc($result);

        $marriageMonth = date("F", $row['marragedate']);
        $marriageDate = date("d", $row['marragedate']);
        $marriageYear = date("Y", $row['marragedate']);



        $husbandBirthID = $row['birthid'];
        $wifeBirthID = $row['wifebirthid'];
        $husbandsql = "SELECT * FROM birthtable WHERE birthid = '$husbandBirthID'";
        $wifesql = "SELECT * FROM birthtable WHERE birthid = '$wifeBirthID'";
        $husbandresult = mysql_query($husbandsql);
        $wiferesult = mysql_query($wifesql);
        $husbandrow = mysql_fetch_assoc($husbandresult);
        $wiferow = mysql_fetch_assoc($wiferesult);

        echo $husbandBirthID;
        echo $wifeBirthID;

        echo $wiferow['birthdate'];
        echo $husbandrow['birthdate'];

        $wifebirthMonth = date("F", strtotime($wiferow['birthdate']));
        $wifebirthDate = date("d", strtotime($wiferow['birthdate']));
        $wifebirthYear = date("Y", strtotime($wiferow['birthdate']));

        $husbandbirthMonth = date("F", strtotime($husbandrow['birthdate']));
        $husbandbirthDate = date("d", strtotime($husbandrow['birthdate']));
        $husbandbirthYear = date("Y", strtotime($husbandrow['birthdate']));

        echo date("Y", strtotime($husbandrow['birthdate']));
        echo $wifebirthMonth;
        // Format the marriage certificate
        $marriageCertificate = <<<HTML
            <html lang="en">

            <head>
                <title>Marriage Certificate</title>
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
                        background: #90a95584;
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
                        height: 20%;
                        display: flex;
                        justify-content: space-between;
                    }

                    #couple > div {
                        width: 49%;
                    }

                    .crows > span {
                        white-space: nowrap;
                        font-size: 80%;
                    }

                    .crows {
                        white-space: nowrap;
                        display: flex;
                        padding: 10px 0px;
                        justify-content: space-between;
                    }

                    .rows {
                        width: 60%;
                    }

                    #fields {
                        height: 70%;
                        width: 100%;
                    }

                    #fields div {
                        transform: scale(0.8) translateX(-70px);
                    }

                    .rows {
                        max-width: 100%;
                        padding: 7px 10px;
                        display: flex;
                        justify-content: space-between;
                    }

                    .rows:last-of-type {
                        justify-content: space-between;

                    }

                    .field {
                        white-space: nowrap;
                    }

                    .value {
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
                                <p>Marriage Register Form Number_________________________________</p>
                                <p>Marriage Registration Unique Identification No.________________________</p>
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
                            <p>Waraqaa Ragaa Gaa'elaa</p>
                        </div>
                        <div id="husbandphoto">
                            <img>
                        </div>
                    </div>
                    <div id="couple">
                        <div id="wife">
                            <div class="crows">
                                <span class="field">Maqaa Haadha Manaa: <span class="value">{$row['wifefname']}</span></span>
                                <span class="field">Maqaa Abbaa: <span class="value">{$row['wifelname']}</span></span>
                                <span class="field">Maqaa Akaakayyuu: <span class="value">____________</span></span>
                            </div>
                            <div class="crows">
                                <span class="field">Guyyaa Dhalootaa Ji'a: <span class="value">$wifebirthMonth</span></span>
                                <span class="field">Guyyaa: <span class="value">$wifebirthDate</span></span>
                                <span class="field">Waggaa: <span class="value">$wifebirthYear</span></span>
                            </div>
                            <div class="crows">
                                <span class="field">Lammummaa: <span class="value">{$wiferow['nationality']}</span></span>
                            </div>
                        </div>
                        <div id="husband">
                            <div class="crows">
                                <span class="field">Maqaa Abbaa Manaa: <span class="value">{$row['hasbandfname']}</span></span>
                                <span class="field">Maqaa Abbaa: <span class="value">{$row['hasbandlname']}</span></span>
                                <span class="field">Maqaa Akaakayyuu: <span class="value">_____________</span></span>
                            </div>
                            <div class="crows">
                                <span class="field">Guyyaa Dhalootaa Ji'a: <span class="value">$husbandbirthMonth</span></span>
                                <span class="field">Guyyaa: <span class="value">$husbandbirthDate</span></span>
                                <span class="field">Waggaa: <span class="value">$husbandbirthYear</span></span>
                            </div>
                            <div class="crows">
                                <span class="field">Lammummaa: <span class="value">{$husbandrow['nationality']}</span></span>
                            </div>
                        </div>
                    </div>
                    <div id="fields">
                        <div class="rows">
                            <span class="field">Guyyaa Ji'a Gaa'elaa: <span class="value">$marriageMonth</span></span>
                            <span class="field">Guyyaa: <span class="value">$marriageDate</span></span>
                            <span class="field">Waggaa: <span class="value">$marriageYear</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Bakka Galmee Gaa'elaa Naannoo: <span class="value">{$row['region']}</span></span>
                            <span class="field">Zoonii: <span class="value">{$row['zone']}</span></span>
                            <span class="field">Magaalaa: <span class="value">{$row['city']}</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Magaalaa xiqqaa: <span class="value">___________</span></span>
                            <span class="field">Woordaa: <span class="value">{$row['woreda']}</span></span>
                            <span class="field">Kebele: <span class="value">{$row['kebele']}</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Guyyaa Galmee Gaa'elaa Ji'a: <span class="value">____________</span></span>
                            <span class="field">Guyyaa: <span class="value">____</span></span>
                            <span class="field">Waggaa: <span class="value">_____</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Guyyaa Waraqaa Ragaa Kenname Ji'a: <span class="value">____________</span></span>
                            <span class="field">Guyyaa: <span class="value">_________</span></span>
                            <span class="field">Waggaa: <span class="value">______</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Maqaa Guutuu Qondala Galmee
                                Kabajaa:_____________________________________________ </span> <span
                                class="field">Mallatoo::_____________________</span>
                            <!-- <span class="field">chapaa:</span></span> -->
                        </div>
                    </div>
                    <div id="container-wrap"> </div>
                </div>
            </body>

            </html>
HTML;

        echo $marriageCertificate;
    } else {
        echo "Marriage ID not found: " . mysql_error();
    }

    $filePath = 'C:/xampp/htdocs/vms/reports/marriagecert.html';
    $filePathJS = 'http://localhost/vms/reports/marriagecert.html';

    // Write the HTML content to the file
    file_put_contents($filePath, $marriageCertificate);
    echo "<script>window.open('$filePathJS', '_blank');</script>";

    mysql_free_result($result);

} 
?>
