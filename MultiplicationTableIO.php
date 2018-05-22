<!DOCTYPE html>
<html>
<head>
<title>Question 2</title>
<script type="text/javascript">
	function CreateMultTable() { //start function
		var RowXaxis = Number(document.getElementById('x').value); //get value from user input for x axis
		var RowYaxis = Number(document.getElementById('y').value); //get value from user input for y axis  
		var str = ''; //assign variable string 
		str += '<table border="1" cellspacing="0"><tr><th width="10%"></th>'; //string to generate table and table header
		//table header continue
		for ( var x = 1; x <= RowXaxis; x++) { //for loop to get header value starting with 1
			str += '<th width="10%">' + x + '</th>'; //print the number until it is less than user input for x axis
		}
		str += '</tr>'; //close for loop header		
		for ( var y = 1; y <= RowYaxis; y++) { //for loop to get value for 2nd row
			str += '<tr><th width="10%">' + y + '</th>'; //value first = 1
			for ( var x = 1; x <= RowXaxis; x++) { //for loop to get value from x axis, value = 1
				str += '<td align="center">' + (y * x) + '</td>'; //start multiply 1*1 = 1
			}
			str += '</tr>'; //close 2nd row
		}
		str += '</table>'; //close table tag
		document.getElementById('tableDisplay').innerHTML = str; //display the table
		return false;
	}
</script>
</head>
<body>
	<form action="table" method="get" onsubmit="return CreateMultTable()">
		<!-- form to submit function -->
		<table align="center" border="0" cellspacing="0">
			<tr><th colspan="2">Generate Multiplication Table</th></tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<!-- enter value x -->
			<tr><td>Value x-axis:</td><td><input type="text" name="start" id='x'></td></tr>
			<!-- enter value y -->
			<tr><td>Value y-axis:</td><td><input type="text" name="end" id='y'></td></tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<!-- submit value x and y to function-->
			<tr><td colspan="2" align="center"><input type="submit" name="MultTable" value="Generate Table"></td></tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr><td colspan="2"><div id="tableDisplay" align="center"></div></td></tr>
			<!-- to display table from fuction-->
		</table>
	</form>
</body>
</html>
