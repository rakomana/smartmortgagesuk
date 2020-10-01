<?php

use App\Equity;
use Illuminate\Database\Seeder;

class EquityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equity = new Equity();
        $equity->name = 'Equity Release Mortgage';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'equity-release-mortgage';
        $equity->meta_title = 'Equity Release Mortgage | How does it Work? - SmartMortgages UK';
        $equity->meta_description = 'If you need a cash lump sum or regular income and you are a homeowner, you have the option of releasing equity from your mortgage.. Find out how it works at SmartMortgages UK';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Drawn Down Life Mortgage';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'drawn-down-life-mortgage';
        $equity->meta_title = 'Business & Personal Drawdown Loans For Home Improvements Or Real Estate Investments';
        $equity->meta_description = 'Drawn down mortgage benefits make sure you pay interest for funds borrowed and keep your debt at minimum. Access funds on your loan at stages of your renovations or property development.';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Will and Pre Paid Funerals';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'will-and-pre-paid-funerals';
        $equity->meta_title = 'Prepaid Funeral Plans | Monthly Insurance For Your Burial';
        $equity->meta_description = 'Minimise funeral costs and plan in advance for a funeral through monthly pre paid plan. Protect yourself and those whom you care for, get an affordable pre paid funeral insurance.';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Life Time Mortgage';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'life-time-mortgage';
        $equity->meta_title = 'Lifetime Mortgage Rates & Providers 2019 | SmartMortgages UK';
        $equity->meta_description = 'Can I use a lifetime mortgage to buy a house? We explain the pros and cons of a life time mortgages, to learn more visit SmartMortgages UK or speak to our credit experts.';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Interest Only Life Time Mortgage';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'interest-only-life-time-mortgage';
        $equity->meta_title = 'Interest Only Life Time Mortgage Providers | SmartMortgages UK';
        $equity->meta_description = 'Interest only lifetime mortgages allow you to pay off the interest of your loan and the alternative to pay off the full borrowed amount at the end of the term.';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Lasting Power Of Attorney';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'lasting-power-of-attorney';
        $equity->meta_title = 'Lasting Power Attorney Guide | What You Need To Know | SmartMortgages UK';
        $equity->meta_description = 'Learn how to make a person a lasting power attorney in this guide.Follow step by step guide to completing and get our expert creditor to help you. SmartMortgages UK';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Lumpsum Life Time Mortgages';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'lumpsum-life-time-mortgages';
        $equity->meta_title = 'Over 60 Lifetime Mortgage | What Are The Dangers Of Equity Release | SmartMortgages UK';
        $equity->meta_description = 'Lump-sum life-time mortgages are different from draw-down. When you are above the age 55, these type of equity release mortgages can useful. For more visit Smartortgages UK.';
        $equity->save();

        $equity = new Equity();
        $equity->name = 'Home Reversion Plan Mortgages';
        $equity->description = 'TIME TO CHANGE YOUR DEAL AND FREE UP MORE CASH?';
        $equity->url = 'home-reversion-plan-mortgages';
        $equity->meta_title = 'Home Reversion Plan, Schemes Calculator | SmartMortgages UK';
        $equity->meta_description = 'Selling a part of your home for a tax-free lump sum cash or regular income is a home reversion plan. You also can live rent free in your property for a life time, find out more.';
        $equity->save();
    }
}
