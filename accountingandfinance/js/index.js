var moreBtn = document.getElementById("arrow-down");
var lessBtn = document.getElementById("arrow-up");
var moreBtnBud = document.getElementById("arrow-downBudget");
var lessBtnBud = document.getElementById("arrow-upBudget");
var moreBtnLoan = document.getElementById("arrow-downLoan");
var lessBtnLoan = document.getElementById("arrow-upLoan");
var moreBtnRep = document.getElementById("arrow-downReports");
var lessBtnRep = document.getElementById("arrow-upReports");

moreBtn.addEventListener("click", morePayroll);
lessBtn.addEventListener("click", lessPayroll);
moreBtnBud.addEventListener("click", moreBudget);
lessBtnBud.addEventListener("click", lessBudget);
moreBtnLoan.addEventListener("click", moreLoan);
lessBtnLoan.addEventListener("click", lessLoan);
moreBtnRep.addEventListener("click", moreReports);
lessBtnRep.addEventListener("click", lessReports);

function morePayroll(){
    document.getElementById("payrollextensionContainer").style.display = "block";
    document.getElementById("lessContentPayroll").style.display = "block";
    document.getElementById("moreContentPayroll").style.display = "none";
}

function lessPayroll(){
    document.getElementById("payrollextensionContainer").style.display = "none";
    document.getElementById("lessContentPayroll").style.display = "none";
    document.getElementById("moreContentPayroll").style.display = "block";
}

function moreBudget(){
    document.getElementById("budgetextensionContainer").style.display = "block";
    document.getElementById("lessContentBudget").style.display = "block";
    document.getElementById("moreContentBudget").style.display = "none";
}

function lessBudget(){
    document.getElementById("budgetextensionContainer").style.display = "none";
    document.getElementById("lessContentBudget").style.display = "none";
    document.getElementById("moreContentBudget").style.display = "block";
}

function moreLoan(){
    document.getElementById("loanextensionContainer").style.display = "block";
    document.getElementById("lessContentLoan").style.display = "block";
    document.getElementById("moreContentLoan").style.display = "none";
}

function lessLoan(){
    document.getElementById("loanextensionContainer").style.display = "none";
    document.getElementById("lessContentLoan").style.display = "none";
    document.getElementById("moreContentLoan").style.display = "block";
}

function moreReports(){
    document.getElementById("reportsextensionContainer").style.display = "block";
    document.getElementById("lessContentReports").style.display = "block";
    document.getElementById("moreContentReports").style.display = "none";
}

function lessReports(){
    document.getElementById("reportsextensionContainer").style.display = "none";
    document.getElementById("lessContentReports").style.display = "none";
    document.getElementById("moreContentReports").style.display = "block";
}