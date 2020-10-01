<?php

use App\Resource;
use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = new Resource();
        $resource->name = 'Property Investment';
        $resource->description = '';
        $resource->url = 'property-investment';
        $resource->meta_title = 'Buy Another Property With Buy To Rent Mortgage | SmartMortgages UK';
        $resource->meta_description = 'Negotiate your mortgage. Use your 20% btl mortgage deposit and buy another property. For more ways to increase your rental income visit Smartmortgages UK.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Remortgage at anytime';
        $resource->description = '';
        $resource->url = 'can-i-remortgage-at-anytime';
        $resource->meta_title = 'Property Remortgage Process, How long Does It Take ? SmartMortgage UK ';
        $resource->meta_description = 'How long does it take to remortgage a property? You are probably not familiar with the remortgage process, visit SmartMortgages UK for more information.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Costs';
        $resource->description = '';
        $resource->url = 'cost';
        $resource->meta_title = 'Remortgage Costs | Mortgage Early Repayment Charge - SmartMortgages UK';
        $resource->meta_description = 'Are you looking for an affordable remortgage fee or mortgage early repayment charge? How much should I expect to pay for remortgaging. Visit SmartMortgages UK today for more info.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Deals';
        $resource->description = '';
        $resource->url = 'deals';
        $resource->meta_title = 'Remortgage Deals For 2020 With Best Fixed or Variable Rates - SmartMortgage UK';
        $resource->meta_description = 'Best fixed rate mortgage and remortgage fees for 2020. Get a quote today from UK s leading lenders with SmartMortgages UK.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Definition';
        $resource->description = '';
        $resource->url = 'definition';
        $resource->meta_title = 'Remortgage Explained - Meaning & Definition | SmartMortgages UK';
        $resource->meta_description = 'What does remortgage mean? It is changing your current mortgage on your property (either paying it off) or finding a better deal from another bank or lender. ';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'How to Remortgage';
        $resource->description = '';
        $resource->url = 'how-to-remortgage';
        $resource->meta_title = 'How To Remortgage ? Mortgage Renewal & Valuation - SmartMortgages UK';
        $resource->meta_description = 'The criteria for getting your house valued for a remortgage and how to get a mortgage for a house you already own? Find out more on SmartMortgages UK.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Is Remortgaging A Good Idea';
        $resource->description = '';
        $resource->url = 'is-remortgaging-a-good-idea';
        $resource->meta_title = 'Is Remortgaging A Good Idea? Or Should I Get A Loan? SmartMortgages UK';
        $resource->meta_description = 'The disadvantages of a mortgage versus getting a loan, find out whether it is a good idea for you to remortgage. Get advice from SmartMortgage UK experts today.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Loan';
        $resource->description = '';
        $resource->url = 'loan';
        $resource->meta_title = 'Remortgage With Same Lender Or Change Mortgage Provider | SmartMortgages UK';
        $resource->meta_description = 'Do you want to switch your mortgage lender, consider the pros and cons such as extra paperwork or repayment fees. Compare remortgaging with the same lender or new banker . Read more!.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Remortgaging A House';
        $resource->description = '';
        $resource->url = 'remortgaging-a-house';
        $resource->meta_title = 'Remortgage Your House And Buy A Second Home | SmartMortgages UK';
        $resource->meta_description = 'Get remortgage advice on buying a second property or new home from SmartMortgages UK. What you need to know when you remortgage your house, read more.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Switch Mortgage';
        $resource->description = '';
        $resource->url = 'switch-mortgage';
        $resource->meta_title = 'Switch Mortgage to Another Bank | Remortgage With SmartMortgages UK';
        $resource->meta_description = 'Change your mortgage provider to another bank using these steps of the remortgaging process. Learn how to switch mortgage lender and save money. Read more.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Why';
        $resource->description = '';
        $resource->url = 'why';
        $resource->meta_title = 'How Soon Can I Remortgage My Property | SmartMortgages UK';
        $resource->meta_description = 'How quickly you can remortgage depends on several factors; higher fees or repayment charge, the nature of your current mortgage deal and more. Can I remortgage early? visit SmartMortgages UK.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Calculator';
        $resource->description = '';
        $resource->url = '-calculator';
        $resource->meta_title = 'Buy To Let Mortgage Calculator For Buying A House SmartMortgages UK';
        $resource->meta_description = 'Calculate what you need to borrow with our buy-to-let mortgage calculator. Know the cost of your btl mortgage.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Buy To Let Or Remortgage';
        $resource->description = '';
        $resource->url = 'buy-to-let-or-remortgage';
        $resource->meta_title = 'Should I Buy To Let or Remortgage | SmartMortgages UK ';
        $resource->meta_description = 'What happens when you remortgage or buy to let? Let us help you decide on what you should do, when your fixed mortgage rate has ended.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Residential Mortgage Rates';
        $resource->description = '';
        $resource->url = 'residential-mortgage-rates';
        $resource->meta_title = 'Buy To Let | Average Residential Mortgage Interest Rates | SmartMortgages UK';
        $resource->meta_description = 'Find best mortgage rates today. Compare typical buy to let mortgage rates for residential from lowest to average interest rates offered. Visit SmartMortgage UK today.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Interest Only Calculator';
        $resource->description = '';
        $resource->url = 'interest-only-calculator';
        $resource->meta_title = 'Bank Interest Only Buy To Let Calculator | Loan Payment | SmartMortgages UK';
        $resource->meta_description = 'Calculate your interest and loan payments from your bank, using our buy to let mortgage calculator. SmartMortgage loan or mortgage interest calculator.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Compare Remortgages';
        $resource->description = '';
        $resource->url = 'compare-remortgages';
        $resource->meta_title = 'Remortgage House Explained, Can I Remortgage My House ? SmartMortgages UK';
        $resource->meta_description = 'How much can i remortgage my house for? I own a property and unsure when its the right time to remortgage is what you have asking yourself. Read more for info.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Buy My House';
        $resource->description = '';
        $resource->url = 'buy-my-house';
        $resource->meta_title = 'Buy My House Fast | Home Buyers - SmartMortgages UK';
        $resource->meta_description = 'Do you want to sell your property to the right buyers. We are leading UK home buyers, quick and easy buying process. SmartMortgages UK, call us today.';
        $resource->save();

        $resource = new Resource();
        $resource->name = 'Secured Loan';
        $resource->description = '';
        $resource->url = '';
        $resource->meta_title = 'Borrow Money | Compare The Best Secured Loans - SmartMortgages UK';
        $resource->meta_description = 'Compare loans and get the best secured or homeowner loans at affordable rates. Apply with bad credit or poor credit score from trusted home equity lenders. For more visit SmartMortgages UK.';
        $resource->save();
    }
}
