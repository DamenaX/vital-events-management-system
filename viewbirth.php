// Block for stat
<?php 
session_start();
$role = "kebeleofficer";
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
	require("kebeleregistrarmenu.php");
	?>
		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">


	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
		<center>
		<legend><h2>wellcome to birth baby information:</h2></legend>
		</center>
		<form>
		<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		<tr>
			<th>  	birthid</th>
			<th>fname</th>
			<th>mname</th>
			<th>lname</th>
			<th>motherfname</th>
			<th>mothermname</th>
			<th>sex</th>
			<th>birthdate</th>
			<th>birthplace</th>
			<th>nationality</th>
			<th>registrationdate</th>
			<th>birthregion</th>
			<th>birthzone</th>
			<th>birthcity</th>
			<th>birthworeda</th>
<th>birthkebele</th>
          <th>birthstatus</th>
          
			
			
			
		</tr>
		 <?php

		$u="select * from birthtable";
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 
				 
				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['birthid']."</td>";
	            	echo "<td>".$row['fname']."</td>";
	            	echo "<td>".$row['mname']."</td>";
	            	echo "<td>".$row['lname']."</td>";
	            	echo "<td>".$row['motherfname']."</td>";
	            	echo "<td>".$row['mothermname']."</td>";
	            	echo "<td>".$row['sex']."</td>";
	            	echo "<td>".$row['birthdate']."</td>";
	            	echo "<td>".$row['birthplace']."</td>";
	            	echo "<td>".$row['nationality']."</td>";
	            	echo "<td>".$row['registrationdate']."</td>";
	            	echo "<td>".$row['birthregion']."</td>";
	            	echo "<td>".$row['birthzone']."</td>";
	            	echo "<td>".$row['birthcity']."</td>";
	            	echo "<td>".$row['birthworeda']."</td>";
	            	echo "<td>".$row['birthkebele']."</td>";
	            	echo "<td>".$row['birthstatus']."</td>";
                    echo "</tr>";
}
                    ?>
                    </table>
                    </form>
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
