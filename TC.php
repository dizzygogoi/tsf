<!DOCTYPE html>
<html>
<head>
 <title>Transfer Credit</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
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
background-color:mediumseagreen;
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
     input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
     input[type=submit]:hover {
  background-color: #45a049;
}
input[type=text]:focus {
  background-color: lightgrey;
}
    
input[type=text]:focus {
  border: 3px solid #555;
}
 </style>
</head>
<body>
    <div id="header"><img src="logo.png" style="padding:5px; height:50%; background: linear-gradient(to top, rgba(254, 254, 254, 0.4), rgba(250, 250, 250, 0));;">
    <font color="orange" size="26">TSF CREDIT MANAGEMENT SYSTEM</font>
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
   
 <form action="tc2.php" method="post">
      <b>From ID </b><br>
     <input type="text" name="from" placeholder="from credit id..." required><br>

     
 
     Enter Amount <input type="text" name="amount" placeholder="Enter credit you want to transfer..." required><br>
    <b>To ID</b><br>
     <input type="text" name="to" placeholder="to credit id..." required><br>
     <input type="submit">
</form>
    

</body>
</html>