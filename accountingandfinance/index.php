<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /IT3AHCTS/login.php");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/logo.png" type="image/png">
  <link rel="shortcut icon" type="image/png" href="/IT3AHCTS/A&FD/accountingandfinance/icons/logo.png">
  <title>Admin | Accounting and Finance Department</title>
  <link rel="stylesheet" href="/IT3AHCTS/A&FD/accountingandfinance/css/index.css">
</head>
<body>
  <div id="accountContainer">
    <div id="accountContent">
      <div id="userIconContainer" class="inline-user">
        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/user.png" id="user-icon">
      </div>
      <div id="userNameContainer" class="inline-user">
        <span class="user-text"><?php echo $_SESSION["session_accountname"] ?></span>
      </div>
      <div id="userHypenContainer" class="inline-user">
        <span class="user-hypen">  |  </span>
      </div>
      <div id="userDepartmentContainer" class="inline-user">
        <span class="user-text">Accounting and Finance Department</span>
      </div>
      <div id="logoutIconContainer" class="inline-user">
        <a href="/IT3AHCTS/A&FD/accountingandfinance/logout.php"><img src="/IT3AHCTS/A&FD/accountingandfinance/icons/logout.png" id="logout-icon"></a>
      </div>
    </div>
  </div>
  <div id="navbarContainer">
    <div id="navbarContent">
      <div id="navbar">
        <div id="companylogoContainer">
          <img src="/IT3AHCTS/A&FD/accountingandfinance/images/logo.png" id="companylogo">
        </div>
        <div id="homeContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/accountingandfinance/" id="homeLink">
            <div id="homeiconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/home.png" id="homeIcon" class="icon-navbar">
            </div>
            <div id="hometextContainer" class="inlineContent">
              <span id="homeText" class="text-navbar">Home</span>
            </div>
          </a>
        </div>
        <div id="payrollContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/accountingandfinance/#" id="payrollLink">
            <div id="payrolliconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/payroll.png" id="payrollIcon" class="icon-navbar">
            </div>
            <div id="payrolltextContainer" class="inlineContent">
              <span id="payrollText" class="text-navbar">Payroll</span>
            </div>
          </a>
          <div id="moreContainer" class="inlineContent">
            <div id="moreContentPayroll" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-down.png" id="arrow-down" class="icon-navbar">
            </div>
            <div id="lessContentPayroll" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-up.png" id="arrow-up" class="icon-navbar">
            </div>
          </div>
        </div>
        <div id="payrollextensionContainer">
            <a href="/IT3AHCTS/A&FD/accountingandfinance/payroll-initial-list.php" id="payrollinitiallistLink" class="extension-link">
                <div id="payrollinitiallistContainer" class="extension-div">
                    <div id="payrollinitiallisticonContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/list.png" id="payrollinitiallistIcon" class="icon-extension">
                    </div>
                    <div id="payrollinitiallisttextContainer" class="inlineContent">
                        <span id="payrollinitiallistText" class="text-extension">Initial List</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/payroll-computed-list.php" id="payrollcomputedLink" class="extension-link">
                <div id="payrollcomputedContainer" class="extension-div">
                    <div id="payrollcomputediconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/computed.png" id="payrollcomputedIcon" class="icon-extension">
                    </div>
                    <div id="payrollcomputedtextContainer" class="inlineContent">
                        <span id="payrollcomputedText" class="text-extension">Computed List</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/payroll-variable.php" id="payrollvariableLink" class="extension-link">
                <div id="payrollvariableContainer" class="extension-div">
                    <div id="payrollvariableiconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/variable.png" id="payrollvariableIcon" class="icon-extension">
                    </div>
                    <div id="payrollvariabletextContainer" class="inlineContent">
                        <span id="payrollvariableText" class="text-extension">Edit Controlled Variables</span>
                    </div>
                </div>
            </a>
        </div>
        <div id="budgetContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/accountingandfinance/#" id="budgetLink">
            <div id="budgeticonContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/budget.png" id="budgetIcon" class="icon-navbar">
            </div>
            <div id="budgettextContainer" class="inlineContent">
              <span id="budgetText" class="text-navbar">Budget</span>
            </div>
          </a>
          <div id="moreContainer" class="inlineContent">
            <div id="moreContentBudget" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-down.png" id="arrow-downBudget" class="icon-navbar">
            </div>
            <div id="lessContentBudget" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-up.png" id="arrow-upBudget" class="icon-navbar">
            </div>
          </div>
        </div>
        <div id="budgetextensionContainer">
            <a href="/IT3AHCTS/A&FD/accountingandfinance/budget-list.php" id="budgetlistLink" class="extension-link">
                <div id="budgetlistContainer" class="extension-div">
                    <div id="budgetlisticonContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/list.png" id="budgetlistIcon" class="icon-extension">
                    </div>
                    <div id="budgetlisttextContainer" class="inlineContent">
                        <span id="budgetlistText" class="text-extension">List of For Approval</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/budget-approved.php" id="budgetapprovedLink" class="extension-link">
                <div id="budgetapprovedContainer" class="extension-div">
                    <div id="budgetapprovediconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/approved.png" id="budgetapprovedIcon" class="icon-extension">
                    </div>
                    <div id="budgetapprovedtextContainer" class="inlineContent">
                        <span id="budgetapprovedText" class="text-extension">List of Approved</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/budget-disapproved.php" id="budgetdisapprovedLink" class="extension-link">
                <div id="budgetdisapprovedContainer" class="extension-div">
                    <div id="budgetdisapprovediconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/disapproved.png" id="budgetdisapprovedIcon" class="icon-extension">
                    </div>
                    <div id="budgetdisapprovedtextContainer" class="inlineContent">
                        <span id="budgetdisapprovedText" class="text-extension">List of Disapproved</span>
                    </div>
                </div>
            </a>
        </div>
        <div id="loanContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/accountingandfinance/#" id="loanLink">
            <div id="loaniconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/loan.png" id="loanIcon" class="icon-navbar">
            </div>
            <div id="loantextContainer" class="inlineContent">
              <span id="loanText" class="text-navbar">Loan</span>
            </div>
          </a>
          <div id="moreContainer" class="inlineContent">
            <div id="moreContentLoan" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-down.png" id="arrow-downLoan" class="icon-navbar">
            </div>
            <div id="lessContentLoan" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-up.png" id="arrow-upLoan" class="icon-navbar">
            </div>
          </div>
        </div>
        <div id="loanextensionContainer">
            <a href="/IT3AHCTS/A&FD/accountingandfinance/loan-list.php" id="loanlistLink" class="extension-link">
                <div id="loanlistContainer" class="extension-div">
                    <div id="loanlisticonContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/list.png" id="loanlistIcon" class="icon-extension">
                    </div>
                    <div id="loanlisttextContainer" class="inlineContent">
                        <span id="loanlistText" class="text-extension">List of For Approval</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/loan-approved.php" id="loanapprovedLink" class="extension-link">
                <div id="loanapprovedContainer" class="extension-div">
                    <div id="loanapprovediconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/approved.png" id="loanapprovedIcon" class="icon-extension">
                    </div>
                    <div id="loanapprovedtextContainer" class="inlineContent">
                        <span id="loanapprovedText" class="text-extension">List of Approved</span>
                    </div>
                </div>
            </a>
            <a href="/IT3AHCTS/A&FD/accountingandfinance/loan-disapproved.php" id="loandisapprovedLink" class="extension-link">
                <div id="loandisapprovedContainer" class="extension-div">
                    <div id="loandisapprovediconContainer" class="inlineContent">
                        <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/disapproved.png" id="loandisapprovedIcon" class="icon-extension">
                    </div>
                    <div id="loandisapprovedtextContainer" class="inlineContent">
                        <span id="loandisapprovedText" class="text-extension">List of Disapproved</span>
                    </div>
                </div>
            </a>
        </div>
        <div id="reportsContainer" class="navbar-menu">
          <a href="/IT3AHCTS/A&FD/accountingandfinance/#" id="reportsLink">
            <div id="reportsiconContainer" class="inlineContent">
              <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/reports.png" id="reportsIcon" class="icon-navbar">
            </div>
            <div id="reportstextContainer" class="inlineContent">
              <span id="reportsText" class="text-navbar">Reports</span>
            </div>
          </a>
          <div id="moreContainer" class="inlineContent">
            <div id="moreContentReports" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-down.png" id="arrow-downReports" class="icon-navbar">
            </div>
            <div id="lessContentReports" class="inlineContent">
                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/arrow-up.png" id="arrow-upReports" class="icon-navbar">
            </div>
          </div>
        </div>
        <div id="reportsextensionContainer">
            <a href="" id="reportssalesLink" class="extension-link">
                <form action="reports-sales.php" method="post" id="sales-report-form">
                    <button type="submit" id="sales-report" name="sales-report" class="reports-button">
                        <div id="reportssalesContainer" class="extension-div">
                            <div id="reportssalesiconContainer" class="inlineContent">
                                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/sales.png" id="reportssalesIcon" class="icon-extension">
                            </div>
                            <div id="reportssalestextContainer" class="inlineContent">
                                <span id="reportssalesText" class="text-extension">Sales Report</span>
                            </div>
                        </div>
                    </button>
                </form>
            </a>
            <a href="" id="reportsexpensesLink" class="extension-link">
                <form action="reports-expenses.php" method="post" id="expenses-report-form">
                    <button type="submit" id="expenses-report" name="expenses-report" class="reports-button">
                        <div id="reportsexpensesContainer" class="extension-div">
                            <div id="reportsexpensesiconContainer" class="inlineContent">
                                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/expenses.png" id="reportsexpensesIcon" class="icon-extension">
                            </div>
                            <div id="reportsexpensestextContainer" class="inlineContent">
                                <span id="reportsexpensesText" class="text-extension">Expenses Report</span>
                            </div>
                        </div>
                    </button>
                </form>
            </a>
            <a href="" id="reportsallLink" class="extension-link">
                <form action="reports-payroll.php" method="post" id="payroll-report-form">
                    <button type="submit" id="payroll-reports" name="payroll-reports" class="reports-button">
                        <div id="reportsallContainer" class="extension-div">
                            <div id="reportsalliconContainer" class="inlineContent">
                                <img src="/IT3AHCTS/A&FD/accountingandfinance/icons/expvssales.png" id="reporsallIcon" class="icon-extension">
                            </div>
                            <div id="reportsalltextContainer" class="inlineContent">
                                <span id="reportsallText" class="text-extension">Payroll</span>
                            </div>
                        </div>
                    </button>
                </form>
            </a>
        </div>
      </div>
    </div>
  </div>
  <div id="budgetCont">
    <div id="budgetContent">
        <div id="budget">
            <?php
                $query = mysqli_query($con, "SELECT * FROM af_fund");
                while($row = mysqli_fetch_assoc($query)){
                    $fund = $row["fundamount"];
                    $date = $row["funddate"];
                }
            ?>
            <div id="budgetTextContainer" class="inline-budget">
                <span id="budText">Amount of internal fund as of <?php echo $date ?>: </span>
            </div>
            <div id="budgetShowContainer" class="inline-budget">
                <span id="budShow">₱ <?php echo $fund ?>.00</span>
            </div>
        </div>
    </div>
  </div>
  <div id="expContainer">
    <div id="expContent">
        <?php
            date_default_timezone_set("Asia/Manila");
		    $Today = date('F Y');
            $selectquery = mysqli_query($con, "SELECT * FROM af_payroll WHERE employeepayrelease='$Today'");
            $checkdata = mysqli_num_rows($selectquery);

            if($checkdata != 0){
                while($tax = mysqli_fetch_assoc($selectquery)){
                    $taxated += $tax['employeetaxated'];
                }
                ?>
        <div id="expTextContainer">
            <span id="expText">Amount of employees Income Tax for the Month of <?php echo $Today ?>: </span>
        </div>
        <div id="expShowContainer">
            <span id="expShow">₱ <?php echo $taxated ?>.00</span>
        </div>
                <?php
            }
            else{
                ?>
        <div id="expTextContainer">
            <span id="expText">Amount of employees Income Tax for the Month of <?php echo $Today ?>: </span>
        </div>
        <div id="expShowContainer">
            <span id="expShow">No TAX payed yet!</span>
        </div>
                <?php
            }
        ?>
    </div>
  </div>
  <div id="salContainer">
    <div id="salContent">
    <?php
            $selectqueryp = mysqli_query($con, "SELECT * FROM purchd_orders WHERE orderpaystatus='PAID'");
            $checkdatap = mysqli_num_rows($selectqueryp);

            if($checkdatap != 0){
                while($sales = mysqli_fetch_assoc($selectqueryp)){
                    $orderprice += $sales['ordertotalprice'];
                }
                ?>
        <div id="salTextContainer">
            <span id="salText">Sales for the month of <?php echo $Today ?>: </span>
        </div>
        <div id="salShowContainer">
            <span id="salShow">₱ <?php echo $orderprice ?>.00</span>
        </div>
        <?php
            }
            else{
                ?>
        <div id="salTextContainer">
            <span id="salText">Sales for the month of <?php echo $Today ?>: </span>
        </div>
        <div id="salShowContainer">
            <span id="salShow">No SALES yet!</span>
        </div>    
                <?php
            }
        ?>
    </div>
  </div>
  <div id="picDesignContainer">
    <div id="picDesignContent">
        <img src="/IT3AHCTS/A&FD/accountingandfinance/images/square1.png" id="picDesign">
    </div>
  </div>
  <script src="/IT3AHCTS/A&FD/accountingandfinance/js/index.js"></script>
</body>
</html>
<?php
    }
?>