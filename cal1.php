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
	<img src="gi22.jpeg" alt="Mountain View" style="width:304px;height:228px;">
	
	      GoldRate:     <input type="number" step=0.001 id="gr"></input>    <a href="http://www.goldpricesindia.com/"><font color="blue">HELP</font></a>
	GrossWeight:  9.34 grams<br>
	Wastage:      Rs. 986<br>
	NetWeight:    9.34 grams<br>
	MakingCharges:<input type="number" step=0.001  id="mc" name = "MakingCharges"></input><br>
	StoneAmount:  Rs. 5450</input><br>
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
		
        		var gwt = 9.34;
				var wst=986;
				var nwt=9.34;
				var samt=5450;
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
<input type = "submit" value = "Bill"  />
</form>
</body>
</html>