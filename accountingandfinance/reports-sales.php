<head>
	<style>
		table{
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    		font-size: 12pt;
		}
	</style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "it3ahcts");
error_reporting("E-NOTICE");
$output = '';
if(isset($_POST["sales-report"]))
{
	$sql = "SELECT * FROM purchd_orders ORDER BY orderid DESC";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table border="1">
			<tr>
			<th colspan="5">Sales Report</th>
			</tr>
			<tr>
			<th colspan="5">IT3A Hardware, Construction and Trading Supply</th>
			</tr>
			<tr>
			<th colspan="5"></th>
			</tr>
			<tr>
			<th colspan="5"></th>
			</tr>
			<tr>
			<th></th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Number of Sold Items</th>
			<th>Amount of Sold</th>	
			</tr>
		';
		$subtotal = 0;
		while($row = mysqli_fetch_array($result))
		{
			$output .='
				<tr>
					<td>' .$row["orderid"].'</td>
					<td>' .$row["orderitem"].'</td>
					<td>' .$row["ordersingleprice"].'</td>
					<td>' .$row["orderquantity"].'</td>
					<td>' .$row["ordertotalprice"].'</td>
				</tr>'
				;
				$subtotal += $row["ordertotalprice"];
		}
		$output .= '</table>
		
		<table border="2">
		<tr>
		<th colspan="6"><right> Total Sales : ' .$subtotal. '</right></th>
		</tr></table>
		
		';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=sales_it3ahcts.xls");
		echo $output;
	}
	else{
		?>
		<script>
			alert('No data read for the date selected! Please try again!');
			window.location.href = "/IT3AHCTS/A&FD/accountingandfinance/index.php";
		</script>
		<?php
	}
}
?>