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
            margin-bottom: 150px;
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

    <!-- //REGION FILTER -->
        <label for="divorceRegion">Divorce Region:</label>
        <select name="divorceRegion" id="divorceRegion">
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
        <label for="divorceWoreda">Divorce Woreda:</label>
        <select name="divorceWoreda" id="divorceWoreda">
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
        <label for="divorceCity">Divorce City:</label>
        <select name="divorceCity" id="divorceCity">
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
        <label for="divorceKebele">Divorce Kebele:</label>
        <select name="divorceKebele" id="divoKebele">
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
            <!-- Add more divo kebele options as needed -->
        </select>

    <!-- YEAR FILTER -->
        <label for="year">Year:</label>
        <input type="text" name="year" id="year" value=""> 

    <!--SUBMITING THE FORM-->
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
    $divorceRegion = $_POST['divorceRegion'];
    $divorceWoreda = $_POST['divorceWoreda'];
    $divorceCity = $_POST['divorceCity'];
    $divorceKebele = $_POST['divorceKebele'];
    $divorceYear =$_POST['year'];

    $sql = "SELECT * FROM divorce WHERE 1";

    if ($divorceRegion != 'Any') {
        $sql .= " AND divorceregion = '$divorceRegion'";
    }

    if ($divorceWoreda != 'Any') {
        $sql .= " AND divorceworeda = '$divorceWoreda'";
    }

    if ($divorceCity != 'Any') {
        $sql .= " AND divorcecity = '$divorceCity'";
    }

    if ($divorceKebele != 'Any') {
        $sql .= " AND divorcekebele = '$divorceKebele'";
    }

    if ($divorceYear != '') {
        $sql .= " AND YEAR(divorcedate) = '$divorceYear'";
    }

    // DOING QUERY AND STORING RESULT IN $result.
    $result = mysql_query($sql, $con);
    if (!$result) {
        die("Error executing query: " . mysql_error($con));
    }

    $numRecords = mysql_num_rows($result);


    // START PDF MARKUP, yehe html wede pdf migeba new.
    $mpdf = new \Mpdf\Mpdf();
    ob_start();

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3>Selected Filters:</h3>";
    echo "<p>Year: $divorceYear</p>";
    echo "<p>Divorce Region: $divorceRegion</p>";
    echo "<p>Divorce Woreda: $divorceWoreda</p>";
    echo "<p>Divorce City: $divorceCity</p>";
    echo "<p>Divorce Kebele: $divorceKebele</p>";
    echo "</div>";

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3 class='total'>Total Divorces: $numRecords</h3>";
    echo "</div>";

    echo "<h2>Filtered Records:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>hasbandfname</th><th>hasbandlname</th><th>wifefname</th><th>wifelname</th><th>divorcedate</th><th>divorcereason</th><th>divorceregion</th><th>divorcezone</th><th>divorceworeda</th><th>divorcecity</th><th>divorcekebele</th><th>numberofchild</th><th>kebeleofficerid</th></tr>";
    
    while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['hasbandfname']}</td>";
        echo "<td>{$row['hasbandlname']}</td>";
        echo "<td>{$row['wifefname']}</td>";
        echo "<td>{$row['wifelname']}</td>";
        echo "<td>{$row['divorcedate']}</td>";
        echo "<td>{$row['divorcereason']}</td>";
        echo "<td>{$row['divorceregion']}</td>";
        echo "<td>{$row['divorcezone']}</td>";
        echo "<td>{$row['divorceworeda']}</td>";
        echo "<td>{$row['divorcecity']}</td>";
        echo "<td>{$row['divorcekebele']}</td>";
        echo "<td>{$row['numberofchild']}</td>";
        echo "<td>{$row['kebeleofficerid']}</td>";
        echo "</tr>";
    }

    echo "</table>";

    $htmlContent = ob_get_clean();
    $mpdf->WriteHTML($htmlContent);

    $pdfFilePath = 'C:/xampp/htdocs/vms/reports/divorcereport.pdf';
    $pdfFilepathJS ='http://localhost/vms/reports/divorcereport.pdf';
    $mpdf->Output($pdfFilePath, \Mpdf\Output\Destination::FILE);
    echo "<script>window.open('$pdfFilepathJS', '_blank');</script>";

    // END PDF MARKUP

    // START WRITING ON WEBPAGE
    mysql_data_seek($result, 0);

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3>Selected Filters:</h3>";
    echo "<p>Year: $divorceYear</p>";
    echo "<p>Divorce Region: $divorceRegion</p>";
    echo "<p>Divorce Woreda: $divorceWoreda</p>";
    echo "<p>Divorce City: $divorceCity</p>";
    echo "<p>Divorce Kebele: $divorceKebele</p>";
    echo "</div>";

    echo "<div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3 class='total'>Total Divorces: $numRecords</h3>";
    echo "</div>";

    echo "<h2>Filtered Records:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>hasbandfname</th><th>hasbandlname</th><th>wifefname</th><th>wifelname</th><th>divorcedate</th><th>divorcereason</th><th>divorceregion</th><th>divorcezone</th><th>divorceworeda</th><th>divorcecity</th><th>divorcekebele</th><th>numberofchild</th><th>kebeleofficerid</th></tr>";
    
    while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['hasbandfname']}</td>";
        echo "<td>{$row['hasbandlname']}</td>";
        echo "<td>{$row['wifefname']}</td>";
        echo "<td>{$row['wifelname']}</td>";
        echo "<td>{$row['divorcedate']}</td>";
        echo "<td>{$row['divorcereason']}</td>";
        echo "<td>{$row['divorceregion']}</td>";
        echo "<td>{$row['divorcezone']}</td>";
        echo "<td>{$row['divorceworeda']}</td>";
        echo "<td>{$row['divorcecity']}</td>";
        echo "<td>{$row['divorcekebele']}</td>";
        echo "<td>{$row['numberofchild']}</td>";
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
