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
?>	<?php
	session_start();
	include("connection.php");
	?>
	<html>
	<head>
	<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
	<link  href="mystyles.css" rel="stylesheet" type="text/css" />

<style>
#content
{
	background-color: #dfdfdf;
	width: auto;
	height: 600px;
	margin-left: 220px;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
}
	.textbox
	{
		height: 50px;
		width: 500px;
		border-top: none;
		border-left: none;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		
	}
	.btn
	{
		height: 50px;
		width: 170px;
		margin-left: 80px;
	}
	#reset
{

		height: 50px;
		width: 170px;	
}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: capitalize;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			width: auto;
		}
				.data-table tbody td img{
			width: 90px;
			height: 40px;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #69a3d6;
			border-color: #fbffff;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
</style>
	</head>

	<body id="bockground">
	<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
	$id=$_SESSION['uid'];
		$sql="select*from user where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
			$uid=$row["uid"];
			$user=$row["ufname"];
		$nation=$row["nationality"];	
		$region=$row["region"];
			$uid=$row["uid"];
		$zone=$row["zone"];
		$woreda=$row["woreda"];
		$city=$row["city"];
		$kebele=$row["kebele"]; 

		}
		}
		else
		echo"No Result Found";
?>
	<div id="all">
<table>
	<div id="divHeader">
	<?php
	require("header.php");

	?>
	</div>
	<div id="divNav">
	<?php
require("staticianmenu.php");
?>
		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">
	 

		<?php
require("statmenu2.php");
?>	


	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
		
		
		
		  <fieldset style="border-radius:5px;">
<legend><font size=5>view death event by year!!!</font></legend>
<form action="" method="post">
<table>

<tr><td width="140px" height="40px" > Enter date</td><td>
<input type="year" name="dateS" pattern="[0-9 -/]+" placeholder="enter year here" required="" >
</td></tr>

<tr><td>
<input type='submit' name='selectyear' value='searchdeath_by_year' class="btn" ></td><td>
<input type='reset'  value='Clear' id="reset"></td></tr></table>
</form>
</fieldset>



<table>


<?php
if(isset($_POST["selectyear"]))
{
	
$year=$_POST["dateS"];

$sql="select * from deathtable where yearofdeath='$year'";
 $view=mysql_query($sql,$con);
				$rowCheck = mysql_num_rows($view);
	if($rowCheck>0)
	{
		echo "<tr><td colspan=10><font size=5> Total number of died since in $year is $rowCheck </font></td></tr>";
}

else
echo"<font size=5 color=red>no such event recoreded since in $year</font>";

}
                  ?>
                </table> 
		
		<form>
		<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		
		 <?php

		$u="select * from deathtable";
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 if($rowCheck>0)
                 {
                    ?>
                    <center>
        <legend><h2>wellcome to death people information:</h2></legend>
        </center>

<tr><th> birthid</th>
            <th>fname</th>
            <th>lname</th>
            
            <th> sex</th>
            <th>nationality</th>
            <th>birthdate</th>
            <th>birthregion</th>
            <th>birthzone</th>
            <th> birthcity</th>
            <th>birthworeda</th>
            <th>birthkebele</th>
            <th>dateofdeath</th>
            <th>workposition</th>
            
            <th>deathregion</th>
            <th>deathworeda</th>
            <th>deathcity</th>
            <th>deathkebele</th>
            <th>deathreason</th>
            
           </tr>
                    <?php


                
				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['deathid']."</td>";
	            	echo "<td>".$row['fname']."</td>";
	            	
	            	echo "<td>".$row['lname']."</td>";
	            	echo "<td>".$row['sex']."</td>";
	            	echo "<td>".$row['nationality']."</td>";
	            	echo "<td>".$row['birthdate']."</td>";
	            	echo "<td>".$row['birthregion']."</td>";
	            	echo "<td>".$row['birthzone']."</td>";
	            	echo "<td>".$row['birthcity']."</td>";
	            	echo "<td>".$row['birthworeda']."</td>";
	            	echo "<td>".$row['birthkebele']."</td>";
	            	echo "<td>".$row['dateofdeath']."</td>";
                    echo "<td>".$row['workposition']."</td>";
	            	
	            	echo "<td>".$row['deathregion']."</td>";
	            	echo "<td>".$row['deathworeda']."</td>";
	            	echo "<td>".$row['deathcity']."</td>";
	            	echo "<td>".$row['deathkebele']."</td>";
	            	echo "<td>".$row['deathreason']."</td>";
	            	echo "</tr>";
	            	
}
 
                    echo "<tr><td colspan=10><font size=5> Total number of died people  in  Ethiopia is $rowCheck </td></tr></font>";
                   
                    
 $male="select * from deathtable where  sex='male'";
                 $view=mysql_query($male,$con);
                    $rowmale = mysql_num_rows($view);
                 if($rowmale>0) 
echo " <tr><td colspan=10><font size=3>number of died male is  $rowmale </td></tr></font>";

$female="select * from deathtable where  sex='female'";
                 $view=mysql_query($female,$con);
                    $rowfemal = mysql_num_rows($view);
                 if($rowfemal>0) 
echo " <tr><td colspan=10><font size=3>number of died female is $rowfemal </td></tr></font>";

    }
    else
    echo "<font size=5>No Register died people  </font>"; 
echo "</table></form>";
                    ?>
                 
                   
                   
                   
                   
			</div>
			  </td>

	   

					</tr>

					<tr>
					<td>
					<div id="divFooter"> 
						<?php
					require("footer.php");

					?>
						
					</div>
				</td>
				</tr>
</table> 
   </div>                                                                    
<?php
}
else
{
header("location:home.php");
}
?>
</body>
</html>
