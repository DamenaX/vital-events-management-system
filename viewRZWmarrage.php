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
require("RZWmenu.php");
?>
		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">
	 <?php
require("RZWmenu2.php");
?>

			


	        </div>

	</td>
	<td>
		<div id="divContentCenter">
		<br/><br/>
<center>
        <legend><font size=5><u>wellcome to divorce people information in <?php echo"$woreda woreda"?></u></font></legend><br/><br/>
        </center><br/><br/>
        <?php
        $sql="select * from marriagetable where woreda='$woreda'";
				 $view=mysql_query($sql,$con);
				$rowCheck = mysql_num_rows($view);
	if($rowCheck>0)

                    echo " <font size=5>Total number of divorced in  ".$woreda." woreda is $rowCheck</font><br/><br/>";
                   
                    


       else
    echo "<font size=5>No Register divorce people in  ".$woreda."  woreda</font>"; 


 
 
 
 
 
                    ?>
                    
                    
                    
                    <table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
        <font size="4"color="blue"> click here to view detailed information  </font> <br/><form action="" method="post"> <input type="submit" name="viewdetail" value="view_marriage_in_detail" class="btn"></form>
         <?php
                   
                 if(isset($_POST['viewdetail']))
     {
		$sql="select * from marriagetable where woreda='$woreda'";
				 $view=mysql_query($sql,$con);
				$rowCheck = mysql_num_rows($view);
	if($rowCheck>0)
	{
	?>
   <tr><th> marriageid</th>
            <th>hasbandfname</th>
            <th>hasbandlname</th>
            
            <th> hasbandage</th>
            <th>wifefname</th>
            <th>wifenlame</th>
            <th>wifeage</th>
         
            <th>woreda</th>
            <th> city</th>
            <th>kebele</th>
            <th>marragedate</th>
            <th>marragecondition</th>
        
           </tr>
            
            
                        <?php


				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['marriageid']."</td>";
	            	echo "<td>".$row['hasbandfname']."</td>";
	            	
	            	echo "<td>".$row['hasbandlname']."</td>";
	            	echo "<td>".$row['hasbandage']."</td>";
	            	echo "<td>".$row['wifefname']."</td>";
    	            	echo "<td>".$row['wifelname']."</td>";
    	            	echo "<td>".$row['wifeage']."</td>";
    	          
    	            	echo "<td>".$row['woreda']."</td>";
    	            	echo "<td>".$row['city']."</td>";
	            	
	            	echo "<td>".$row['kebele']."</td>";
	            	
                    echo "<td>".$row['marragedate']."</td>";
	            	echo "<td>".$row['marragecondition']."</td>";
	            
	            	echo "</tr>";
	            	
}}
	}?>
                    </table>
                   
		
                  
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
