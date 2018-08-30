<head>
	<style>
		table{
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			font-size: 12pt;
			width: 100%;
		}
	</style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "it3ahcts");
error_reporting("E-NOTICE");
$output = '';
if(isset($_POST["expenses-report"]))
{
	$sql = "SELECT * FROM af_payroll, af_requestbudget, af_loan WHERE requestbudget.requeststatus='APPROVED' AND loanaf.requeststatus='APPROVED'";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table border="1">
			<tr>
			<th colspan="5">Expenses Report</th>
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
			<th>Month</th>
			<th>Taxes</th>	
			<th>Payroll</th>
			<th>Budget Request</th>
			<th>Loan</th>
			</tr>
		';
		$subtotal = 0;
		while($row = mysqli_fetch_array($result))
		{
            $taxes += $row["employeetaxated"];
            $payroll += $row["employeefinalsalary"];
            $reqbud += $row["requestamount"];
            $loan += $row["loanamount"];
        }
        
			$output .='
            <tr>
                <td>' .'MAY 2018'.'</td>
                <td>' .$taxes.'</td>
                <td>' .$payroll.'</td>
                <td>' .$reqbud.'</td>
                <td>' .$loan.'</td>
            </tr>'
            ;
            $subtotal = $taxes + $payroll + $reqbud + $loan;
		$output .= '</table>
		
		<table border="2">
		<tr>
		<th colspan="5"><right> Total Expenses : ' .$subtotal. '</right></th>
		</tr></table>
		
		';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=expenses_it3ahcts.xls");
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