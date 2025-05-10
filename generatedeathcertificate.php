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
    #divNav ul li {
        z-index: 950;
    }

    form {
        width: 300px;
        margin: auto;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        display: block;
        margin-bottom: 100px;
        z-index: 900;
        position: relative;
    }

    select,
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
        z-index: 900;
        position: relative;
    }
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
    style="transform: translate(100px,-680px);">
    <lable for="id">death Id: </lable>
    <input type="text" id="id" name="id">
    <input type="Submit">
</form>

</html>

<?php

$result = null;

// function generatedeathCertificate($deathId, $con)
// {

// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $deathId = $_POST['id'];
    // Fetch data from the deathtable
    $sql = "SELECT * FROM deathtable WHERE deathid = '$deathId'";
    $result = mysql_query($sql);

    if ($result) {
        $row = mysql_fetch_assoc($result);

        $deathMonth = date("F", $row['dateofdeath']);
        $deathDate = date("d", $row['dateofdeath']);
        $deathYear = date("Y", $row['dateofdeath']);
        $birthMonth = date("F", $row['birthdate']);
        $birthDate = date("d", $row['birthdate']);
        $birthYear = date("Y", $row['birthdate']);
        // Format the death certificate
        $deathCertificate = <<<HTML
        <html lang="en">

            <head>
                <title>Deathcert 2</title>
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
                        height: 550px;
                        width: 800px;
                        margin: auto;
                        padding: 10px;
                        border: 18px solid #0077b6;
                        position: relative;
                        background: #90a95584;
                    }

                    #top {
                        height: 30%;
                        width: 100%;
                        margin-bottom: 20px;
                        display: flex;
                        flex-direction: column;
                    }

                    #top>div:nth-child(1) {
                        height: 40%;
                        /* border: 2px solid green; */
                        display: flex;
                        flex-direction: row;

                    }

                    #flag {
                        width: 55%;
                    }

                    #flag img {
                        height: 100%;
                        margin-left: 70%;
                    }

                    #regnumbers {
                        width: 45%;
                    }

                    #regnumbers p {
                        font-size: 60%;
                        font-family: roboto;
                        font-weight: bold;
                        margin-left: 10%;
                    }

                    #top>div:nth-of-type(2) {
                        width: 100%;
                        height: 70%;
                    }

                    #toptext p {
                        font-weight: bolder;
                        font-family: roboto;
                        text-align: center;
                    }

                    #fields {
                        height: 70%;
                        width: 100%;
                    }

                    #fields div {
                        transform: scale(0.85) translateX(-60px);
                    }

                    .rows {
                        font-size: 18px;
                        max-width: 100%;
                        padding: 10px 10px;
                        display: flex;
                        justify-content: space-between;
                    }

                    .rows:nth-of-type(3) {
                        justify-content: flex-start;
                    }

                    .rows:nth-of-type(4) > span,
                    .rows:nth-of-type(3) span {
                        margin-right: 10px;
                    }

                    .rows:nth-of-type(4) span:nth-of-type(3) {
                        margin-right: 30px;
                    }

                    .rows:last-of-type {
                        justify-content: space-between;
                    }

                    .field {
                        white-space: nowrap;
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
                        height: 90%;

                        /* height: 25%; */
                    }

                    #oromia {
                        width: 60%;
                        height: 100%;
                        display: flex;
                        align-items: center;
                        align-content: center;
                    }

                    #oromia img {
                        height: 90%;
                        margin-left: 20px;

                    }

                    #oromia p {
                        font-size: 90%;
                    }

                    .value {
                        text-decoration: underline;
                        text-transform: uppercase;
                    }
                </style>
            </head>

            <body>
                <div id="container">
                    <div id="top">
                        <div>
                            <div id="ethiopia">
                                <img src="http://localhost/vms/image/ethiopia.png">
                            </div>
                            <div id="oromia">
                                <p>Lakk adda galme du'aa: <span class="value">_____________________</span></p>
                                <img src="http://localhost/vms/image/oromia.png">
                            </div>
                        </div>
                        <div id="toptext">
                            <p>Federal Democratic Republic of Ethiopia Vital Event Registration</p>
                            <p>Waraqaa Ragaa Du'aa</p>
                        </div>
                    </div>
                    <div id="fields">
                        <div class="rows">
                            <span class="field">Maqaa Nama Du'ee: <span class="value">{$row['fname']}</span></span>
                            <span class="field">Maqaa Abbaa: <span class="value">{$row['lname']}</span></span>
                            <span class="field">Maqaa Akaakayyuu: <span class="value">_____________</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">hojii: <span class="value">{$row['workposition']}</span></span>
                            <span class="field">koorniyaa: <span class="value">{$row['sex']}</span></span>
                            <span class="field">Ji'a Guyyaa Dhaloota: <span class="value">$birthMonth</span></span>
                            <span class="field">Guyyaa: <span class="value">$birthDate</span></span>
                            <span class="field">Waggaa: <span class="value">$birthYear</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Lammummaa: <span class="value">{$row['nationality']}</span></span>
                            <span class="field">Bakka Du'aa: <span class="value">{$row['deathregion']} {$row['deathworeda']} {$row['deathcity']}</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Ji'a Guyyaa Du'aa: <span class="value">$deathMonth</span></span>
                            <span class="field">Guyyaa: <span class="value">$deathDate</span></span>
                            <span class="field">Waggaa: <span class="value">$deathYear</span></span>
                            <span class="field">Ji'a Galmee Du'aa:<span class="value">_______</span></span>
                            <span class="field">Guyyaa: <span class="value">_____</span></span>
                            <span class="field">Waggaa: <span class="value">_____</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Guyyaa Waraqaa Ragaa Kenname Ji'a: <span class="value">_____</span></span>
                            <span class="field">Guyyaa: <span class="value">_____</span></span>
                            <span class="field">Waggaa: <span class="value">______</span></span>
                        </div>
                        <div class="rows">
                            <span class="field">Maqaa Guutuu Qondala Galmee
                                Kabajaa:_____________________________________________</span>
                        </div>
                        <div class="rows">
                            <span class="field">Mallatoo:</span>
                            <!-- <span class="field">chaappaa</span> -->
                        </div>
                    </div>
                    <div id="container-wrap"> </div>
                </div>
            </body>

        </html>
HTML;

        echo $deathCertificate;
    } else {
        echo "Death ID not found: " . mysql_error();
    }

    $filePath = 'C:/xampp/htdocs/vms/reports/deathcert.html';
    $filePathJS = 'http://localhost/vms/reports/deathcert.html';

    // Write the HTML content to the file
    file_put_contents($filePath, $deathCertificate);
    echo "<script>window.open('$filePathJS', '_blank');</script>";

    mysql_free_result($result);

} 
?>
