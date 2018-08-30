<head>
	<style>
		table{
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			font-size: 12pt;
            width: 100%;
            text-align: center;
		}
	</style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "it3ahcts");
error_reporting("E-NOTICE");
$output = '';
if(isset($_POST["payroll-reports"]))
{
	$sql = "SELECT * FROM af_payroll WHERE employeestatus='COMPUTED'";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table border="1">
			<tr>
			<th colspan="11">Payroll of IT3A Hardware, Construction and Trading Supply Employees</th>
			</tr>
			<tr>
			<th colspan="11">IT3A Hardware, Construction and Trading Supply</th>
			</tr>
			<tr>
			<th colspan="11"></th>
			</tr>
			<tr>
			<th colspan="11"></th>
			</tr>
			<tr>
			<th>Employee Full Name</th>
			<th>Department</th>	
			<th>Position</th>
			<th>Email</th>
            <th>Rendered Hours</th>
            <th>Deduction</th>
            <th>Tax Rate</th>
            <th>Taxated</th>
            <th>Addition</th>
            <th>Final Salary</th>
            <th>Month of Release</th>
			</tr>
		';
		while($row = mysqli_fetch_array($result))
		{
            $output .='
            <tr>
                <td>' .$row["employeefullname"].'</td>
                <td>' .$row["employeedepartment"].'</td>
                <td>' .$row["employeeposition"].'</td>
                <td>' .$row["employeemail"].'</td>
                <td>' .$row["employeerenderedhours"].'</td>
                <td>' .$row["employeededuction"].'</td>
                <td>' .$row["employeetax"]. '%' . '</td>
                <td>' . 'PHP ' .$row["employeetaxated"]. '.00' . '</td>
                <td>' . 'PHP ' .$row["employeeaddition"]. '.00' .'</td>
                <td>' . 'PHP ' .$row["employeefinalsalary"]. '.00' .'</td>
                <td>' .$row["employeepayrelease"].'</td>
            </tr>'
            ;
        }
		$output .= '</table>
		
		';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=payroll_it3ahcts.xls");
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