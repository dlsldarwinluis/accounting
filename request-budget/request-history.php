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
        $name = $_SESSION["session_accountname"];
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
  <link rel="stylesheet" href="/IT3AHCTS/A&FD/request-budget/css/request-history.css">
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
  <div id="requestbudgethistoryContainer">
    <div id="requestbudgethistory">
      <table id="budgethistory" align="center">
        <thead>
          <tr>
            <th>Request ID</th>
            <th>Request Amount</th>
            <th>Request Reason</th>
            <th>Request Status</th>
            <th>Date of Assessment</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = mysqli_query($con, "SELECT * FROM af_requestbudget WHERE requestname='$name'");
            $validate = mysqli_num_rows($query);

            if($validate != 0){
              while($data = mysqli_fetch_assoc($query)){
                ?>
          <tr>
            <td><?php echo $data["requestid"] ?></td>
            <td><?php echo $data["requestamount"] ?></td>
            <td id="reasonTab"><?php echo $data["requestreason"] ?></td>
            <td><?php
              if(empty($data["requeststatus"])){
                echo "NOT YET ASSESSED";
              }
              else{
                echo $data["requeststatus"];
              }
            ?></td>
            <td><?php
              if(empty($data["requestdateofassessment"])){
                echo "NOT YET ASSESSED";
              }
              else{
                echo $data["requestdateofassessment"];
              }
            ?></td>
            <td><?php 
              if(empty($data["requestdateofassessment"]) && empty($data["requeststatus"])){
                ?>
              <form action="" method="post" id="cancelRequest">
                <button type="submit" id="cancelSubmit" name="cancelSubmit"><img src="/IT3AHCTS/A&FD/request-budget/icons/cancel.png" class="icon-table"><input type="hidden" name="requestid" id="requestid" value="<?php echo $data["requestid"] ?>"></button>
              </form>
                <?php
              }
              else{
                ?>
              <form action="" method="post" id="deleteRequest">
                <button type="submit" id="deleteSubmit" name="deleteSubmit"><img src="/IT3AHCTS/A&FD/request-budget/icons/delete.png" class="icon-table"><input type="hidden" name="requestid" id="requestid" value="<?php echo $data["requestid"] ?>"></button>
              </form>
                <?php
              }
            ?></td>
            <td><form action="/IT3AHCTS/A&FD/request-budget/tcpdf/generate/singlebudgettransaction.php" method="post" id="printRequest">
                <button type="submit" id="printSubmit" name="printSubmit"><img src="/IT3AHCTS/A&FD/request-budget/icons/pdf.png" class="icon-table"><input type="hidden" name="requestid" id="requestid" value="<?php echo $data["requestid"] ?>"></button>
              </form></td>
          </tr>
                <?php
              }
            }
            else{
              ?>
          <tr>
            <td colspan="6">No budget request yet!</td>
          </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
    if(isset($_POST["cancelSubmit"])){
      $id = $_POST["requestid"];
      ?>
      <script>
        alert("Request will be canceled!");
      </script>
      <?php
      mysqli_query($con, "DELETE FROM af_requestbudget WHERE requestid='$id'");
      ?>
      <script>
        alert("Successfully canceled!");
        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
      </script>
      <?php
    }
  ?>
  <?php
    if(isset($_POST["deleteSubmit"])){
      $id = $_POST["requestid"];
      ?>
      <script>
        alert("Request will be deleted!");
      </script>
      <?php
      mysqli_query($con, "DELETE FROM af_requestbudget WHERE requestid='$id'");
      ?>
      <script>
        alert("Successfully deleted!");
        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
      </script>
      <?php
    }
  ?>
  <div id="loanhistoryContainer">
    <div id="loanhistory">
      <table id="loanhistory" align="center">
        <thead>
          <tr>
            <th>Request ID</th>
            <th>Request Amount</th>
            <th>Request Reason</th>
            <th>Request Status</th>
            <th>Date of Assessment</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $querytwo = mysqli_query($con, "SELECT * FROM af_loan WHERE requestname='$name'");
            $validatetwo = mysqli_num_rows($querytwo);

            if($validatetwo != 0){
              while($datal = mysqli_fetch_assoc($querytwo)){
                ?>
          <tr>
            <td><?php echo $datal["requestid"] ?></td>
            <td><?php echo $datal["requestamount"] ?></td>
            <td id="reasonTabl"><?php echo $datal["requestreason"] ?></td>
            <td><?php
              if(empty($datal["requeststatus"]) && empty($datal["requeststatushr"])){
                echo "NOT YET ASSESSED";
              }
              else{
                echo $datal["requeststatus"];
              }
            ?></td>
            <td><?php
              if(empty($datal["requestdateofassessment"])){
                echo "NOT YET ASSESSED";
              }
              else{
                echo $datal["requestdateofassessment"];
              }
            ?></td>
            <td><?php 
              if(empty($datal["requestdateofassessment"]) && empty($datal["requeststatus"])){
                ?>
              <form action="" method="post" id="cancelRequestl">
                <button type="submit" id="cancelSubmitl" name="cancelSubmitl"><img src="/IT3AHCTS/A&FD/request-budget/icons/cancel.png" class="icon-table"><input type="hidden" name="requestidl" id="requestidl" value="<?php echo $datal["requestid"] ?>"></button>
              </form>
                <?php
              }
              else{
                ?>
              <form action="" method="post" id="deleteRequestl">
                <button type="submit" id="deleteSubmitl" name="deleteSubmitl"><img src="/IT3AHCTS/A&FD/request-budget/icons/delete.png" class="icon-table"><input type="hidden" name="requestidl" id="requestidl" value="<?php echo $datal["requestid"] ?>"></button>
              </form>
                <?php
              }
            ?></td>
            <td><form action="/IT3AHCTS/A&FD/request-budget/tcpdf/generate/singleloantransaction.php" method="post" id="printRequestl">
                <button type="submit" id="printSubmitl" name="printSubmitl"><img src="/IT3AHCTS/A&FD/request-budget/icons/pdf.png" class="icon-table"><input type="hidden" name="requestidl" id="requestidl" value="<?php echo $datal["requestid"] ?>"></button>
              </form></td>
          </tr>
                <?php
              }
            }
            else{
              ?>
          <tr>
            <td colspan="6">No loan yet!</td>
          </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
    if(isset($_POST["cancelSubmitl"])){
      $idl = $_POST["requestidl"];
      ?>
      <script>
        alert("Loan will be canceled!");
      </script>
      <?php
      mysqli_query($con, "DELETE FROM af_loan WHERE requestid='$idl'");
      ?>
      <script>
        alert("Successfully canceled!");
        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
      </script>
      <?php
    }
  ?>
  <?php
    if(isset($_POST["deleteSubmitl"])){
      $idl = $_POST["requestidl"];
      ?>
      <script>
        alert("Request will be deleted!");
      </script>
      <?php
      mysqli_query($con, "DELETE FROM af_loan WHERE requestid='$idl'");
      ?>
      <script>
        alert("Successfully deleted!");
        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
      </script>
      <?php
    }
  ?>
</body>
</html>
<?php
    }
?>