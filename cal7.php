<html>
<style>
body
{
	background:url("back4.jpeg");
	color:black;
	font-family:"Lucida Handwriting" ;
	font-size:20px;
	text-align:center;
}
</style>
<body>
<form action="link.php" method="post">
	<pre>
	<img src="p4.jpeg" alt="Mountain View" style="width:304px;height:228px;">
	
	GoldRate:     <input type="number" step=0.001 id="gr"></input>    <a href="http://www.goldpricesindia.com/"><font color="blue">HELP</font></a>
	GrossWeight:  15.35 grams<br>
	Wastage:      Rs.1000.00<br>
	NetWeight:    12.43 grams<br>
	MakingCharges:<input type="number" step=0.001  id="mc" name = "MakingCharges"></input><br>
	StoneAmount:  Rs.2542<br>
	<button onclick="test()">Submit</button><br>
	Rate:         <input type="number" step=any id="rate"></input><br>
	GrossAmount:  <input type="number" step=any id="gamt" name = "GrossAmount"></input><br>
	VAT:          <input type="number" step=any id="vat" name="VAT"></input><br>
	Amount:       <input type="number" step=any id="amt" name="Amount" ></input><br></pre>
	<p id="a"</p>
	<p id="b"</p>
	<p id="c"</p>
	<p id="d"</p>
	<p id="e"</p>
	<p id="f"</p>
	<p id="g"</p>
	<p id="h"</p>
  <script>
        function test()
        {
		
        		var gwt = 15.35;
				var wst=1000;
				var nwt=12.43;
				var samt=2542;
				var gr = parseFloat(document.getElementById("gr").value);
		var mc = parseFloat(document.getElementById("mc").value);
		var a=(nwt*gr)/10;            
		document.getElementById("rate").value=a;
		var b=parseInt(mc+a+samt+wst);
		document.getElementById("gamt").value=b;
		var c=parseInt(b/100);
		document.getElementById("vat").value=c;
		var d=b+c;
		document.getElementById("amt").value=d;	
       		
	 }
  </script>
<input type = "submit" value = "Bill" />
</form>
</body>
</html>