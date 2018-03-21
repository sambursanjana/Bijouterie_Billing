<?php
session_start();
?>
<html>
<style>
body
{
	background:url("b1.jpeg")no-repeat center center fixed #000; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	color:white;
	font-family:"Courier New" ;
	font-size:10px;
}
table, td, th {
    border: 2px solid white;
}

table{
    border-collapse: collapse;
    width: 60%;
	align:right;
}

th {
    height: 50px;
}
h1 {
	font-family:"Georgia";
	font-size:25px;
	font-style:italic;
}
p  {
	font-size:15px;
}
</style>
<body>

<h1 style="text-align:center;"> GOLDEN ACCOUNTANCY </h1>
<p style ="text-align:right;"> ph no.:56564265</p>
<br><br><br><br><br><br><br><br><br>
<table align="right">
  <tr>
    <th>Particulars</th>
    <th>GrossAmount</th>
    <th>VAT</th>
	<th>Amount</th>
  </tr>
  <tr>
    <td><b>GoldItem</b></td>
    <td><b>Rs.<?php echo $_SESSION['GrossAmount'];?>/-</b></td>
    <td><b>Rs.<?php echo $_SESSION['VAT'];?>/-</b></td>
	<td><b>Rs.<?php echo $_SESSION['Amount'];?>/-</b></td>
  </tr>
</table>
<center>
<br><br><br><br><br><br><br> <pre>
												<input type = "button" value = "Bill" onClick = "window.print()" />
</pre></center> 
</body>
</html>