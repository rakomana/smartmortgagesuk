<?php

use App\Loan;
use Illuminate\Database\Seeder;

class LoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loan = new Loan();
        $loan->name = 'Home Owner Loan';
        $loan->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $loan->url = 'home-owner-loans';
        $loan->loan_type = '';
        $loan->reloan_type = '';
        $loan->meta_title = 'Best Homeowner Loans | Get Equity Against Your Property - SmartMortgages UK';
        $loan->meta_description = 'Loans secured on property a.k.a homeowner equity loans allow you to borrow equity against the value of your home. Visit SmartMortgages UK today.';
        $loan->save();

        $loan = new Loan();
        $loan->name = 'Bad Credit Secured Loan';
        $loan->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $loan->url = 'bad-credit-secured-loans';
        $loan->loan_type = '';
        $loan->reloan_type = '';
        $loan->meta_title = 'Apply For Secured Loans With Bad Credit Score | SmartMortgages UK';
        $loan->meta_description = 'Can I get a guaranteed loan with a poor credit ? Apply for a secured loan today by speaking to our remortgage experts with SmartMortgages UK.';
        $loan->save();

        $loan = new Loan();
        $loan->name = 'Home Improvement Loan';
        $loan->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $loan->url = 'home-improvement-loans';
        $loan->loan_type = '';
        $loan->reloan_type = '';
        $loan->meta_title = 'Best Home Improvement Loans For Renovations & Extensions | SmartMortgages UK';
        $loan->meta_description = 'Compare home improvement loans for renovations or extentions, we at SmartMortgae UK will help you find the right deal today, contact us.';
        $loan->save();

        $loan = new Loan();
        $loan->name = 'Debt Consolidation Secured Loan';
        $loan->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $loan->url = 'debt-consolidation-secured-loans';
        $loan->loan_type = '';
        $loan->reloan_type = '';
        $loan->meta_title = 'Remortgages For Debt Consolidation | Online Mortgage Quote';
        $loan->meta_description = 'Get a quote today and remortgage your home to pay-off existing debts. Our credit experts will help you find the right deal - SmartMortgages UK.';
        $loan->save();

        $loan = new Loan();
        $loan->name = 'Mortgage To Let Secured Loan';
        $loan->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $loan->url = 'mortgage-to-let-secured-loan';
        $loan->loan_type = '';
        $loan->reloan_type = '';
        $loan->meta_title = '';
        $loan->meta_description = '';
        $loan->save();
    }
}
