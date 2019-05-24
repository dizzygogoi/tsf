

<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: lawngreen;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: purple;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
#header 
{
    background-color: grey;
    padding: 25px;
    
}
     #ul1
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:mediumpurple;
}
.li1
{ 
float:left;
padding: 25px 25px;
display:block;
color:white;
border-right:1px solid white;
}
.li1:hover
{
background-color:black;
}
 </style>
</head>
<body>
    <div id="header"><img src="logo.png" style="padding:5px; height:10%; background: linear-gradient(to top, rgba(254, 254, 254, 0.4), rgba(250, 250, 250, 0));;">
    <font color="orange" size="26">TSF SPARKS CREDIT MANAGEMENT SYSTEM</font>
    </div>
    <div> 
        <ul id="ul1">
<li class="li1"> <span><a href="Home.php" ><i class="icon-home icon-large"></i><font color="white" size="4">Home</font> </a></span>
                    </li>
                   <li class="li1">
                        <span><a href="tsfd.php"><i class=" icon-th-large icon-large"></i><font color="white" size="4">View User</font> </a></span>
                    </li>
<li class="li1">
                        <span><a href="TC.php"><i class="icon-shopping-cart icon-large"></i><font color="white" size="4">Tranfer Credit</font> </a></span>
                    </li>  
                    <li class="li1">
                        <span><a href="about.php"><i class="icon-info-sign icon-large"></i><font color="white" size="4">About US</font> </a></span>
                    </li>

                   <li class="li1">
                        <span><a href="contact.php"><i class="icon-phone-sign icon-large"></i><font color="white" size="4">Contact US</font> </a></span>
                    </li>
  
        </ul></div>
 
 <?php
    
$conn = mysqli_connect("localhost", "root", "", "user");
    $from = $_POST['from'];
    $to = $_POST['to'];
            $amount = $_POST['amount'];

 
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
    $sql="SELECT cucd FROM USER WHERE uid= $from";
    $result= $conn->query($sql);
    if($result>$amount)
    {
  $sql1 = "UPDATE USER SET cucd =cucd - $amount WHERE uid = $from" ;
      $sql2=" UPDATE USER SET cucd =cucd + $amount WHERE uid = $to" ;

 $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
        echo("Credit Transferred sucessfully");
    }
    else
    {
        echo("Insufficient Credit to Transfer");
    }
 $conn->close();
            header('Refresh: 3;url=tsfd.php');
 

?>
    </body>
</html>