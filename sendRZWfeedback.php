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
</style></head>
					<body id="bockground">
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{ $id=$_SESSION['uid'];
        $sql="select*from user where uid='$id'";
        $record=mysql_query($sql,$con);
        if(mysql_num_rows($record)>0)
        {
        while($row=mysql_fetch_array($record))  
        {
        $nation=$row["nationality"];    
        $region=$row["region"];
        $zone=$row["zone"];
        $woreda=$row["woreda"];
        $city=$row["city"];
        $kebele=$row["kebele"]; 

        }
        }
        else
        echo"No Result Found";
?><div id="all">
					<table id="tb">
					<div id="divHeader">
					<?php
					require("header.php");

					?>
					</div>
					<div id="divNav">
				<?php
require("RZWmenu.php");
?></div>
					<tr><td><div id="divSideContentLeft">

<?php
require("RZWmenu2.php");
?>
  
					

					</div>

					</td>
			
			<td>
			<div id="divContentCenter" >
			<fieldset style="height: 500px;"><legend align="center">Write your feedback here!!! </legend>
<form name="feedback" method="post" action="#">
<table>
<tr><td width="140px" height="40px"  style="font-size:19px;">Role</td><td width="140px">
        <select name="role" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
		<option>--Select Role--</option>
		<option value="Admin">Admin</option>
		<option value="statician">statician</option>
		<option value="federaloficer">federaloficer</option>
		<option value="reginalofficer">reginalofficer</option>
		<option value="zonalofficer">zonalofficer</option>
		<option value="woredaofficer">woredaofficer</option>
		<option value="kebeleofficer">kebeleofficer</option>
		
		
		
		</select>
    
        </td><td width="140px" ></td></tr> 

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
						echo "<script>alert('Feedback has been sent successfully')";
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


