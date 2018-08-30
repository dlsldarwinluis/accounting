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
          $position = $row['position'];
          $email = $row['email1'];
        }
        if(isset($_POST['inputsubmit'])){
            $reqname = $_POST['requestname'];
            $reqdepartment = $_POST['requestdepartment'];
            $reqposition = $_POST['requestposition'];
            $reqemail = $_POST['requestmail'];
            $reqamount = $_POST['requestamount'];
            $reqreason = $_POST['requestreason'];
    
            mysqli_query($con,"INSERT INTO af_loan (requestname, requestdepartment, requestposition, requestemail, loanamount, requestreason) VALUES ('$reqname', '$reqdepartment', '$reqposition', '$reqemail', '$reqamount', '$reqreason')");
            ?>
            <script>
                alert("Your loan is successfully submitted! Please check your request history regularly for the approval/disapproval notice of the request!");
                location.reload();
                window.location = "/IT3AHCTS/A&FD/request-budget/request-history.php";
            </script>
            <?php
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
  <link rel="stylesheet" href="/IT3AHCTS/A&FD/request-budget/css/apply-loan.css">
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
  <div id="formContainer">
    <div id="styleForm">
        <div id="textForm">Apply for Loan</div>
        <div id="noteForm">Note: Please answer the following details</div>
    </div>
    <div id="formContent">
        <form action="" method="post" id="form-applyloan" class="form-accountingandfinance">
            <div id="inputnameContainer">
                <div id="inputnameIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/user.png" alt="Name" class="input-icon">
                </div>
                <div id="inputnameText" class="inline-forminput">
                    <input type="text" name="requestname" id="requestname" class="form-input" value="<?php echo $_SESSION["session_accountname"] ?>" readonly>
                </div>
            </div>
            <div id="inputdepartmentContainer">
                <div id="inputdepartmentIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/department.png" alt="Department" class="input-icon">
                </div>
                <div id="inputdepartmentText" class="inline-forminput">
                    <input type="text" name="requestdepartment" id="requestdepartment" class="form-input" value="<?php echo $department ?>" readonly>
                </div>
            </div>
            <div id="inputpositionContainer">
                <div id="inputpositionIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/position.png" alt="Position" class="input-icon">
                </div>
                <div id="inputpositionText" class="inline-forminput">
                    <input type="text" name="requestposition" id="requestposition" class="form-input" value="<?php echo $position ?>" readonly>
                </div>
            </div>
            <div id="inputmailContainer">
                <div id="inputmailIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/email.png" alt="E-mail" class="input-icon">
                </div>
                <div id="inputmailText" class="inline-forminput">
                    <span class="input-desctext">@</span>
                    <input type="text" name="requestmail" id="requestmail" value="<?php echo $email ?>" readonly>
                </div>
            </div>
            <div id="inputamountContainer">
                <div id="inputamountIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/amount.png" alt="Amount" class="input-icon">
                </div>
                <div id="inputamountText" class="inline-forminput">
                    <span class="input-desctext">₱</span>
                    <input type="number" name="requestamount" id="requestamount" min="0" placeholder="Amount">
                </div>
            </div>
            <div id="inputreasonContainer">
                <div id="inputreasonIcon" class="inline-forminput">
                    <img src="/IT3AHCTS/A&FD/request-budget/icons/reason.png" alt="Reason" class="input-icon">
                </div>
                <div id="inputreasonText" class="inline-forminput">
                    <input type="text" name="requestreason" id="requestreason" placeholder="Reason">
                </div>
            </div>
            <div id="inputsubmitContainer">
                <div id="inputsubmitButton">
                    <button type="submit" id="inputsubmit" name="inputsubmit"><img src="/IT3AHCTS/A&FD/request-budget/icons/check.png" alt="Submit" class="submit-icon"></button>
                </div>
            </div>
        </form>
    </div>
  </div>
</body>
</html>
<?php
    }
?>