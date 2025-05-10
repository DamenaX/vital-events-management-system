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
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            width: 300px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            transform: translate(500px,-680px);
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select, input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Add margin-top to create space between form and table */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        #whole-wrap {
            transform: translate(0,-680px);
            height: auto;
        }

        .total {
            font-size: 21px;
        }
    </style>
    <link  href="mystyles.css" rel="stylesheet" type="text/css"/>
</head>
<body>


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

<!--A FORM TO COLLECT DESIRED FILTERS-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- // SEX FILTER -->
        <label for="sex">Sex:</label>
        <select name="sex" id="sex">
            <option value="Any">Any</option> 
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

    <!-- // NATIONALITY FILTER -->
        <label for="nationality">Nationality:</label>
        <select name="nationality" id="nationality">
            <option value="Any">Any</option> 
            <option value="Ethiopia">Ethiopia</option>
            <option value="Canada">Canada</option>
        </select>

    <!-- //REGION FILTER -->
        <label for="birthRegion">Birth Region:</label>
        <select name="birthRegion" id="birthRegion">
            <option value="Any">Any</option> 
            <option value="Oromia">Oromia</option>
            <option value="Amhara">Amhara</option>
            <option value="SNNPR">SNNPR</option>
            <option value="Tigray">Tigray</option>
            <option value="Benishangul-Gumuz">Benishangul-Gumuz</option>
            <option value="Gambella">Gambella</option>
            <option value="Harari">Afar</option>
            <option value="Afar">Afar</option>
        </select>

    <!-- //WOREDA FILTER     -->
        <label for="birthWoreda">Birth Woreda:</label>
        <select name="birthWoreda" id="dirthWoreda">
            <option value="Any">Any</option> 
            <option value="Woreda 1">Woreda 1</option>
            <option value="Woreda 2">Woreda 2</option>
            <option value="Woreda 3">Woreda 3</option>
            <option value="Woreda 4">Woreda 4</option>
            <option value="Woreda 5">Woreda 5</option>
            <option value="Woreda 6">Woreda 6</option>
            <option value="Woreda 7">Woreda 7</option>
            <option value="Woreda 8">Woreda 8</option>
            <option value="Woreda 9">Woreda 9</option>
            <option value="Woreda 10">Woreda 10</option>
            <option value="Woreda 11">Woreda 11</option>
            <option value="Woreda 12">Woreda 12</option>
            <option value="Woreda 13">Woreda 13</option>
            <option value="Woreda 14">Woreda 14</option>
            <option value="Woreda 15">Woreda 15</option>
            <option value="Woreda 16">Woreda 16</option>
        </select>


    <!-- //CITY FILTER     -->
        <label for="birthCity">Birth City:</label>
        <select name="birthCity" id="birthCity">
            <option value="Any">Any</option> 
            <option value="Addis Ababa">Addis Ababa</option>
            <option value="Hawassa">Hawassa</option>
            <option value="Bahir Dar">Bahir Dar</option>
            <option value="Bishoftu">Bishoftu</option>
            <option value="Dire Dawa">Dire Dawa</option>
            <option value="Gondar">Gondar</option>
            <option value="Harar">Harar</option>
            <option value="Adama">Adama</option>
            <option value="Arba Minch">Arba Minch</option>
            <option value="Mekele">Mekele</option>

        </select>

    <!-- //KEBELE FILTER    -->
        <label for="birthKebele">Birth Kebele:</label>
        <select name="birthKebele" id="birthKebele">
            <option value="Any">Any</option> 
            <option value="Kebele 1">Kebele 1</option>
            <option value="Kebele 2">Kebele 2</option>
            <option value="Kebele 3">Kebele 3</option>
            <option value="Kebele 4">Kebele 4</option>
            <option value="Kebele 5">Kebele 5</option>
            <option value="Kebele 6">Kebele 6</option>
            <option value="Kebele 7">Kebele 7</option>
            <option value="Kebele 8">Kebele 8</option>
            <option value="Kebele 9">Kebele 9</option>
            <option value="Kebele 10">Kebele 10</option>
            <option value="Kebele 11">Kebele 211/option>
            <option value="Kebele 12">Kebele 2<12option>
            <option value="Kebele 13">Kebele 2</13ption>
            <option value="Kebele 14">Kebele 2</o14tion>
            <option value="Kebele 15">Kebele 2</op15ion>
            <!-- Add moreneeded -->
        </select>

    <!-- //DEAD-ALIVE FILTER    -->
        <label for="birthstatus">Birth status:</label>
        <select name="birthstatus" id="birthstatus">
            <option value="Any">Any</option> 
            <option value="born">born</option> 
            <option value="died">died</option> 
        </select>

    <!-- YEAR FILTER -->
        <label for="year">Year:</label>
        <input type="text" name="year" id="year" value=""> 

        <button type="submit">Filter Records</button>
</form>
<!--END FORM-->

<div id="whole-wrap">
<?php
require_once __DIR__ . '/vendor/autoload.php'; // lOADING MPDF
include("connection.php"); // LOADING CONNECTION TO DATABASE

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get filter values from the form
    $sex = $_POST['sex'];
    $nationality = $_POST['nationality'];
    $birthRegion = $_POST['birthRegion'];
    $birthWoreda = $_POST['birthWoreda'];
    $birthCity = $_POST['birthCity'];
    $birthKebele = $_POST['birthKebele'];
    $birthStatus = $_POST['birthstatus'];
    $birthYear =$_POST['year'];


    $sql = "SELECT * FROM birthtable WHERE 1";

    if ($sex != 'Any') {
        $sql .= " AND sex = '$sex'";
    }

    if ($nationality != 'Any') {
        $sql .= " AND nationality = '$nationality'";
    }

    if ($birthRegion != 'Any') {
        $sql .= " AND birthregion = '$birthRegion'";
    }

    if ($birthWoreda != 'Any') {
        $sql .= " AND birthworeda = '$birthWoreda'";
    }

    if ($birthCity != 'Any') {
        $sql .= " AND birthcity = '$birthCity'";
    }

    if ($birthKebele != 'Any') {
        $sql .= " AND birthkebele = '$birthKebele'";
    }

    if ($birthYear != '') {
        $sql .= " AND YEAR(birthdate) = '$birthYear'";
    }


    $sqlMale =  $sql . " AND sex = 'male'";
    $sqlFemale = $sql . " AND sex = 'female'";

    $result = mysql_query($sql, $con);
    $resultMale = mysql_query($sqlMale, $con);
    $resultFemale = mysql_query($sqlFemale, $con);
    
    if (!$result) {
        die("Error executing query: " . mysql_error($con));
    }
    

    //COUNT NUMBER OF BORN PEOPLE
    $nameMale = 0;
    $nameFemale = 0;
    $numMale = mysql_num_rows($resultMale);
    $numRecords = mysql_num_rows($result);
   
    $numFemale = mysql_num_rows($resultFemale);


    // START PDF MARKUP, yehe html wede pdf migeba new.
    $mpdf = new \Mpdf\Mpdf();
    ob_start();

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3>Selected Filters:</h3>";
    echo "<p>Year: $birthYear</p>";
    echo "<p>Sex: $sex</p>";
    echo "<p>Nationality: $nationality</p>";
    echo "<p>Birth Region: $birthRegion</p>";
    echo "<p>Birth Woreda: $birthWoreda</p>";
    echo "<p>Birth City: $birthCity</p>";
    echo "<p>Birth Kebele: $birthKebele</p>";
    echo "</div>";

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3 class='total'>Total births: $numRecords</h3>";
    echo "<h3>Male births: $numMale</h3>";
    echo "<h3>Female births: $numFemale</h3>";
    echo "</div>";

    echo "<h2>Filtered Records:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>fname</th><th>mname</th><th>lname</th><th>motherfname</th><th>mothermname</th><th>sex</th><th>nationality</th><th>birthdate</th><th>registrationdate</th><th>birthregion</th><th>birthzone</th><th>birthcity</th><th>birthworeda</th><th>birthkebele</th><th>birthstatus</th><th>socialsecurityno</th><th>kebeleofficerid</th></tr>";
    
    while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['mname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['motherfname']}</td>";
        echo "<td>{$row['mothermname']}</td>";
        echo "<td>{$row['sex']}</td>";
        echo "<td>{$row['nationality']}</td>";
        echo "<td>{$row['birthdate']}</td>";
        echo "<td>{$row['registrationdate']}</td>";
        echo "<td>{$row['birthregion']}</td>";
        echo "<td>{$row['birthzone']}</td>";
        echo "<td>{$row['birthcity']}</td>";
        echo "<td>{$row['birthworeda']}</td>";
        echo "<td>{$row['birthkebele']}</td>";
        echo "<td>{$row['birthstatus']}</td>";
        echo "<td>{$row['socialsecurityno']}</td>";
        echo "<td>{$row['kebeleofficerid']}</td>";
        echo "</tr>";
    }

    echo "</table>";

    $htmlContent = ob_get_clean();
    $mpdf->WriteHTML($htmlContent);

    $pdfFilePath = 'C:/xampp/htdocs/vms/reports/birthreport.pdf';
    $pdfFilepathJS ='http://localhost/vms/reports/birthreport.pdf';
    $mpdf->Output($pdfFilePath, \Mpdf\Output\Destination::FILE);
    echo "<script>window.open('$pdfFilepathJS', '_blank');</script>";

    // END PDF MARKUP, Wede websitum print larg...

    // echo "<h2>Filtered Records:</h2>";
    // echo "<table border='1'>";
    // echo "<tr><th>fname</th><th>lname</th><th>sex</th><th>nationality</th><th>birthdate</th><th>birthregion</th><th>birthzone</th><th>birthcity</th><th>birthworeda</th><th>birthkebele</th><th>birthdate</th><th>workposition</th><th>birthregion</th><th>birthworeda</th><th>birthcity</th><th>birthkebele</th><th>birthreason</th><th>kebeleofficerid</th></tr>";

    // Reseting index since we already used in previous loop
    mysql_data_seek($result, 0);

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3>Selected Filters:</h3>";
    echo "<p>Year: $birthYear</p>";
    echo "<p>Sex: $sex</p>";
    echo "<p>Nationality: $nationality</p>";
    echo "<p>Birth Region: $birthRegion</p>";
    echo "<p>Birth Woreda: $birthWoreda</p>";
    echo "<p>Birth City: $birthCity</p>";
    echo "<p>Birth Kebele: $birthKebele</p>";
    echo "</div>";

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3 class='total'>Total births: $numRecords</h3>";
    echo "<h3>Male births: $numMale</h3>";
    echo "<h3>Female births: $numFemale</h3>";
    echo "</div>";

    echo "<h2>Filtered Records:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>fname</th><th>mname</th><th>lname</th><th>motherfname</th><th>mothermname</th><th>sex</th><th>nationality</th><th>birthdate</th><th>registrationdate</th><th>birthregion</th><th>birthzone</th><th>birthcity</th><th>birthworeda</th><th>birthkebele</th><th>birthstatus</th><th>socialsecurityno</th><th>kebeleofficerid</th></tr>";
    
    while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['mname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['motherfname']}</td>";
        echo "<td>{$row['mothermname']}</td>";
        echo "<td>{$row['sex']}</td>";
        echo "<td>{$row['nationality']}</td>";
        echo "<td>{$row['birthdate']}</td>";
        echo "<td>{$row['registrationdate']}</td>";
        echo "<td>{$row['birthregion']}</td>";
        echo "<td>{$row['birthzone']}</td>";
        echo "<td>{$row['birthcity']}</td>";
        echo "<td>{$row['birthworeda']}</td>";
        echo "<td>{$row['birthkebele']}</td>";
        echo "<td>{$row['birthstatus']}</td>";
        echo "<td>{$row['socialsecurityno']}</td>";
        echo "<td>{$row['kebeleofficerid']}</td>";
        echo "</tr>";
    }

    echo "</table>";



    mysql_free_result($result);
}
?>
</div>
</body>
</html>
