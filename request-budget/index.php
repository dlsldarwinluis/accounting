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
  <link rel="stylesheet" href="/IT3AHCTS/A&FD/request-budget/css/index.css">
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
  <div id="guidelinesContainer">
    <div id="guidelinesContent">
      <div id="guidelinesOne" class="guidelines-content">
        <h2 class="guidelines-header">
          Guidelines for requesting a budget:
        </h2>
        <p class="guidelines-paragraph">
          <ol class="guidelines-procedure">
            <span>Budget request is intended to let the departments under the IT3A Hardware, Construction and Trading Supply acquire departmentalize budget based on their stated reasons. For requesting you must undergo into the process stated below:</span>
            <li>First, requestor must first login to the Budget Request and Loan System. Accounts username and password are provided by the SUPER ADMIN.</li>
            <li>Requestor will be redirected to the homepage of the Budget Request and Loan System. To access the budget request form, you must click the request budget tab.</li>
            <li>Then, requestor will be asked to answers some needed details. Make sure that you stated all the details needed specially the amount of request and the reason for requesting budget.</li>
            <li>Status of request (disapproval or approval) will be seen on request history.</li>
            <li>Once approved, requestor must print the transaction details and go to the accounting and finance department for the release of check.</li>
            <li>For more information, please contact the accounting and finance department or go to accounting and finance department office.</li>
          </ol>
        </p>
      </div>
      <div id="guidelinesTwo" class="guidelines-content">
        <h2 class="guidelines-header">
          Guidelines for applying a loan:
        </h2>
        <p class="guidelines-paragraph">
          <ol class="guidelines-procedure">
            <span>As part of company’s generosity, IT3A Hardware, Construction and Trading Supply let their employees acquire reasonable loans for their urgent needs. For applying you must undergo into the process stated below:</span>
            <li>First, requestor must first login to the Budget Request and Loan System. Accounts username and password are provided by the SUPER ADMIN.</li>
            <li>Requestor will be redirected to the homepage of the Budget Request and Loan System. To access the apply loan form, you must click the apply for loan tab.</li>
            <li>Then, requestor will be asked to answers some needed details. Make sure that you stated all the details needed specially the amount of loan and the reason for requesting the loan.</li>
            <li>Status of loan (disapproval or approval) will be seen on request history.</li>
            <li>Once approved, requestor must print the transaction details and go to the accounting and finance department for the release of check.</li>
            <li>10% of the employee’s loan will be automatically lessen to the employee’s monthly pay check. But, whole payment of the loan can be also entertained.</li>
            <li>For more information, please contact the accounting and finance department or go to accounting and finance department office.</li>
          </ol>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
<?php
    }
?>