// Block for admin
<?php 
session_start();
$role = "reginalofficer";
if (!empty($_SESSION['sun'])) {
    if ($_SESSION['srole'] != $role) header('location: denied.php'); 
    if ($_SESSION['status'] != "active") header('location: blocked.php');
}
else {
    header("location: logout.php");
}
?><?php
session_start();
include("connection.php");
?>
					<html>
					<head>
					<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
					<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
					<script type="text/javascript" src="../js/ja.js">
					</script>

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
?><div id="all">
					<table id="tb">
					<div id="divHeader">
					<?php
					require("header.php");

					?>
					</div>
					<div id="divNav">
				<?php

require("regionmenu.php");
?></div>
					<tr><td><div id="divSideContentLeft">

<?php
require("regionmenu2.php");
?>
  
					

					</div>

					</td>
			
			<td>
			<div id="divContentCenter" >
			

	<fieldset style="height: 500px;"><legend align="center">Write your feedback here!!! </legend>
<form name="feedback" method="post" action="#">
<table>
<tr>
<td>
role:
</td>
<td align="right">
<input type="text" pattern="[A-Za-z]*" name="role" maxlength="50"  required="true" class="textbox" style="background-image:none;" name="email" required="true" class="textbox" placeholder="enter your role">
</td>
</tr>

<tr>
<td>
Email Address:
</td>
<td >
<input type="email" style="background-image:none;" name="email" required="true" class="textbox" placeholder="Enter Email Address">
</td>
</tr>
<tr>
<td>
Comments :
</td>
<td>
<textarea name="comment" maxlength="1000" cols="25" rows="6" class="textarea" placeholder="Put Here Your Coment"></textarea>
</td>
</tr>
<tr><td>Date:</td><td><input type="data" name="date" value="<?php echo date("d/m/y");?>" readonly class="textbox"></td></tr>

	<?php
		if(isset($_POST['send']))
				{
					
					$role=$_POST['role'];
					$email=$_POST['email'];
					$comment=$_POST['comment'];
					$date=$_POST['date'];
					$sql=mysql_query("insert into feedbacktable(role,email,comment,dates,status) values('$role','$email','$comment','$date','New')");
					if(!$sql)
					{
						die("Data not inserted:".mysql_error());
					}
					else
					{
						echo "<font size=5 color=green>Feedback has been sent successfully</font>";
					}
				}
				?>
		
<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="Submit" class="btn" name="send"><input type="reset" value="Reset" id="reset"> 
</td>
</tr>
</table>
</form>
</fieldset>

			</div>
			</td>

				
			</tr>
			<tr>
			<td>
					<div id="divFooter"><?php
					require("footer.php");

					?>
						
				</div>
				</td>
				</tr>
				</table></div>
				<?php
}
else
{
header("location:home.php");
}
?>
				</body>
				</html>


