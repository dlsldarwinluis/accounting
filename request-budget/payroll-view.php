<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /IT3AHCTS/login.php");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
        $sql = mysqli_query($con, "SELECT * FROM hr_employees WHERE id = '$_SESSION[session_id]'");
        while($row = mysqli_fetch_assoc($sql)){
          $department = $row['department'];
          $name = $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/logo.png" type="image/png">
  <link rel="shortcut icon" type="image/png" href="/IT3AHCTS/A&FD/request-budget/icons/logo.png">
  <title>Budget Request and Loan System | Accounting and Finance Department</title>
  <link rel="stylesheet" href="/IT3AHCTS/A&FD/request-budget/css/payroll-view.css">
</head>
<body>
  <div id="accountContainer">
    <div id="accountContent">
      <div id="userDepartmentContainer" class="inline-user">
        <span class="user-text"><?php echo $department ?></span>
      </div>
      <div id="userHypenContainer" class="inline-user">
        <span class="user-hypen">  |  </span>
      </div>
      <div id="userNameContainer" class="inline-user">
        <span class="user-text"><?php echo $_SESSION["session_accountname"] ?></span>
      </div>
      <div id="userIconContainer" class="inline-user">
        <img src="/IT3AHCTS/A&FD/request-budget/icons/user.png" id="user-icon">
      </div>
    </div>
  </div>
  <div id="navbarContainer">
    <div id="navbarContent">
      <div id="navbar">
        <div id="companylogoContainer">
          <img src="/IT3AHCTS/A&FD/request-budget/images/logo.png" id="companylogo">
        </div>
        <div id="homeContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/" id="homeLink">
            <div id="homeiconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/home.png" id="homeIcon" class="icon-navbar">
            </div>
            <div id="hometextContainer" class="inlineContent">
              <span id="homeText" class="text-navbar">Home</span>
            </div>
          </a>
        </div>
        <div id="requesthistoryContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/request-history.php" id="requesthistoryLink">
            <div id="requesthistoryiconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/request-history.png" id="requesthistoryIcon" class="icon-navbar">
            </div>
            <div id="requesthistorytextContainer" class="inlineContent">
              <span id="requesthistoryText" class="text-navbar">Request History</span>
            </div>
          </a>
        </div>
        <div id="requestbudgetContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/request-budget.php" id="requestbudgetLink">
            <div id="requestbudgeticonContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/request-budget.png" id="requestbudgetIcon" class="icon-navbar">
            </div>
            <div id="requestbudgettextContainer" class="inlineContent">
              <span id="requestbudgetText" class="text-navbar">Request Budget</span>
            </div>
          </a>
        </div>
        <div id="loanContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/apply-loan.php" id="loanLink">
            <div id="loaniconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/loan.png" id="loanIcon" class="icon-navbar">
            </div>
            <div id="loantextContainer" class="inlineContent">
              <span id="loanText" class="text-navbar">Apply for Loan</span>
            </div>
          </a>
        </div>
        <div id="payrollContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/payroll-view.php" id="payrollLink">
            <div id="payrolliconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/payroll.png" id="payrollIcon" class="icon-navbar">
            </div>
            <div id="payrolltextContainer" class="inlineContent">
              <span id="payrollText" class="text-navbar">View my Payroll</span>
            </div>
          </a>
        </div>
        <div id="logoutContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/request-budget/logout.php" id="logoutLink">
            <div id="logouticonContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/request-budget/icons/logout.png" id="logoutIcon" class="icon-navbar">
            </div>
            <div id="logouttextContainer" class="inlineContent">
              <span id="logoutText" class="text-navbar">Logout</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="tablepayrollContainer">
    <table id="tablepayroll">
        <thead>
          <tr>
            <th>Date of Release</th>
            <th>Total Amount of Salary</th>
            <th>Amount of Tax</th>
            <th>Amount of Additional Bonus</th>
          </tr>
        </thead>
  <?php
    $query = mysqli_query($con, "SELECT * FROM af_payroll WHERE employeefullname='$name' AND employeestatus='COMPUTED'");
    $check = mysqli_num_rows($query);

    if(!empty($check)){
      while($salarydata = mysqli_fetch_assoc($query)){
        ?>
          <tbody>
            <tr>
              <td><?php echo $salarydata["employeepayrelease"] ?></td>
              <td><?php echo "P " . $salarydata["employeefinalsalary"] . "00" ?></td>
              <td><?php echo $salarydata["employeetax"] . "%" ?></td>
              <td><?php echo "P " . $salarydata["employeeaddition"] . "00" ?></td>
            </tr>
          </tbody>
      </table>
        <?php
      }
    }
    else{
      ?>
          <tbody>
            <tr>
              <td colspan="4">No Payroll history yet!</td>
            </tr>
          </tbody>
        </table>
      <?php
    }
  ?>
  </div>
</body>
</html>
<?php
    }
?>