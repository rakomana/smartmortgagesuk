<?php

namespace App\Http\Controllers;

use App\Mortgage;
use App\Loan;
use App\Equity;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class MortgageController extends Controller
{

    /**
     * Display mortgages from the storage.
     * Display loans from the storage.
     * Display equity from the storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllServices()
    {   
        SEOMeta::setTitle('Mortgages | Buy To Let, Let To Buy, Right To Buy & Help To Buy');
        SEOMeta::setDescription('There are several types of mortgages available - buy to let, let to buy, right to buy and help to buy to choose from, depending on your borrowing needs we can help you choose the right deal. Contact SmartMortgages UK');

        $mortgages = Mortgage::all();
        $loans = Loan::all();
        $equities = Equity::all();

        return view('mortgage', compact('mortgages','loans','equities'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function show(string $url)
    {
        $mortgage = Mortgage::where('url', $url)->firstOrFail();

        SEOMeta::setTitle($mortgage->meta_title);
        SEOMeta::setDescription($mortgage->meta_description);
        
        return view('description-mortgage',  compact('mortgage'));
    }

    /**
     *
     * @return \Illuminate\Http\View
     */
    public function calculator()
    {
        SEOMeta::setTitle('Mortgage Calculator & Estimator | Monthly Interest & Repayments - SmartMortgages UK');
        SEOMeta::setDescription('How much do you need to borrow? Use our mortgage calculators to check interest rates, monthly repayments for different mortgage terms. Get a quote today with SmartMortgages UK.');
        
        return view('remortgage-calculator');
    }
}
