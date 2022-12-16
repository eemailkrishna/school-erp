<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function Account(){
        return view('account.account');
    }

    public function AddAccount(){
        return view('account.add_account');
    }

    public function AccountList(){
        return view('account.account_list');
    }

    public function AddIncomeOrExpenceInfo(){
        return view('account.add_income_or_expence_info');
    }
    
    public function IncomeOrExpenceList(){
        return view('account.income_or_expence_list');
    }

    public function Ledger(){
        return view('account.ledger');
    }

    public function LedgerReport(){
        return view('account.ledger_report');
    }

    public function LedgerReportMonthly(){
        return view('account.ledger_report_monthly');
    }
    
    public function IncomeExpenseReport(){
        return view('account.income_expense_report');
    }

    public function RefundReport(){
        return view('account.refund_report');
    }

    public function LedgerAdvanceSalaryReport(){
        return view('account.ledger_advance_salary_report');
    }
}