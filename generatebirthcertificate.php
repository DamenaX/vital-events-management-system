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
<link href="mystyles.css" rel="stylesheet" type="text/css" />
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

    select,
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
    style="transform: translate(100px,-680px);">
    <lable for="id">Birth Id: </lable>
    <input type="text" id="id" name="id">
    <input type="Submit">
</form>

</html>

<?php

$result = null;

function generateBirthCertificate($birthId, $con)
{

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthId = $_POST['id'];
    // Fetch data from the birthtable
    $sql = "SELECT * FROM birthtable WHERE birthid = '$birthId'";
    $result = mysql_query($sql);

    if ($result) {
        $row = mysql_fetch_assoc($result);
        $bd = date("F", $row['birthdate']);

        $name = $row['fname'];
        $lname = $row['lname'];
        $sex = $row['sex'];
        $birthMonth = date("F", $row['birthdate']);
        $birthDate = date("d", $row['birthdate']);
        $birthYear = date("Y", $row['birthdate']);
        $city = $row['birthcity'];
        $zone = $row['birthzone'];
        $mothername = $row['motherfname'] . ' ' . $row['mothermname'];
        $fathername = $row['lname'];
        $registrationdate = $row['registrationdate'];


        $birthCertificate = <<<HTML
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        }

        #container {
            background: #90a95584;
            position: relative;
            margin: auto;
            /* width: 100vw; */
            width: 60%;
            height: 90vh;
            border: 18px solid #0077b6;
            display: flex;
            flex-direction: column;
        }

        #top {
            width: 100%;
            height: 40%;
            /* border: 2px solid black; */
            display: flex;
            flex-direction: column;
        }

        #constText {
            width: 100%;
            /* border: 3px solid pink; */
        }

        #constText p {
            font-size: 18px;
            font-weight: bold;
            font-family: roboto;
            text-align: center;
            width: 70%;
            margin: 10px auto;
        }

        #flags {
            width: 100%;
            height: 40%;
            /* border: 10px solid blue; */
            display: flex;
            flex-direction: row;
        }

        #flags p {
            font-size: 14px;
        }

        #oromia {
            width: 60%;
            height: 100%;
            display: flex;
            align-items: center;
            align-content: center;
        }

        #oromia img {
            height: 60%;
            margin-left: 20px;

        }

        #ethiopia {
            width: 40%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        #ethiopia img {
            height: 60%;

            /* height: 25%; */
        }

        #middle {
            width: 100%;
            height: 38%;
            /* border: 2px solid green; */
            display: flex;
            flex-direction: row;
        }

        #middle div,
        #below div,
        #bottom div {
            width: 100%;
        }

        #below {
            width: 100%;
            height: 10%;
            /* border: 2px solid green; */
            display: flex;
            flex-direction: row;
        }

        #bottom {
            width: 100%;
            height: 10%;
            /* border: 2px solid green; */
            display: flex;
            flex-direction: row;
        }

        .field {
            padding: 5px;
        }

        .value {
            text-decoration: underline;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="container-wrap"> </div>
            <!-- <img class="bg" src="image/noise.png"> -->

            <div id="top">
                <div id="flags">
                    <div id="ethiopia">
                        <img src="http://localhost/vms/image/ethiopia.png">
                    </div>
                    <div id="oromia">
                        <p>Lakk adda galme dhaloota: <span class="value">___________________</span></p>
                        <img src="http://localhost/vms/image/oromia.png">
                    </div>
                </div>
                <div id="constText">
                    <p>Mootummaa Fedaraalawaa Dimokiraatawaa Rippaablika Itoophiyaatti Ejensii GalmeessaRagaa Bu'uraa
                        Hawaasummaa Oromiyaa</p>
                    <p>Waraqaa Ragaa Dhalootaa</p>
                </div>
            </div>
            <div id="middle">
                <div id="first">
                    <div class="field">Maqaa Daa'imaa: <span class="value">{$row['fname']}</span></div>
                    <div class="field">Koorniyaa: <span class="value">{$row['sex']}</span></div>
                    <div class="field">Iddoo Dhalootaa: <span class="value">{$row['birthcity']}</span></div>
                    <div class="field">Maqaa Guutuu Haadhaa: <span class="value">{$row['motherfname']} {$row['mothermname']}</span></div>
                    <div class="field">Maqaa Guutuu Abbaa: <span class="value">{$row['lname']}</span></div>
                </div>
                <div id="second">
                    <div class="field">Maqaa Abbaa: <span class="value">{$row['lname']}</span></div>
                    <div class="field">Guyyaa Dhalootaa Ji'a: <span class="value">$birthMonth</span></div>
                </div>
                <div id="third">
                    <div class="field">Maqaa Akaakayuu: <span class="value">_______________</span></div>
                    <div class="field double"><span>Guyya: <span class="value">$birthDate</span></span> <span>Bara: <span
                                class="value">$birthYear</span></span></div>
                    <div class="field">Lammummaa: <span class="value">{$row['nationality']}</span></div>
                    <div class="field">Lammummaa Haadhaa: <span class="value">____________</span></div>
                    <div class="field">Lammummaa Abbaa: <span class="value">____________</span></div>
                </div>
            </div>
            <div id="below">
                <div class="field">Dhalootichi Kan Galmeeffame: <span class="value">{$row['registrationdate']}</span></div>
                <div class="field">Guyyaa Waraqaa Ragaan Kenname: <span class="value">___________________</span></div>
            </div>
            <div id="bottom">
                <div class="field">Maqaa Gutuu Qondaala Galme Kabajaa: <span class="value">_____________________</span></div>
                <div class="field">Mallatto: <span class="value"></span></div>
            </div>

        
    </div>
</body>

</html>
HTML;
        // Format the birth certificate

        echo $birthCertificate;
    } else {
        echo "Birth ID not found: " . mysql_error();
    }

    // Output the birth certificate

    // $mpdf = new \Mpdf\Mpdf();
// ob_start();

    // echo $birthCertificate;

    // $htmlContent = ob_get_clean();
// $mpdf->WriteHTML($htmlContent);

    // $pdfFilePath = 'C:/xampp/htdocs/vms/reports/birthcert.pdf';
// $pdfFilepathJS ='http://localhost/vms/reports/birthcert.pdf';
// $mpdf->Output($pdfFilePath, \Mpdf\Output\Destination::FILE);

    $filePath = 'C:/xampp/htdocs/vms/reports/birthcert.html';
    $filePathJS = 'http://localhost/vms/reports/birthcert.html';

    // Write the HTML content to the file
    file_put_contents($filePath, $birthCertificate);
    echo "<script>window.open('$filePathJS', '_blank');</script>";

    mysql_free_result($result);

}
?>
