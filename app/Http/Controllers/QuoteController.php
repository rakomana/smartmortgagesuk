<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use App\Mortgage;
use App\Loan;
use App\Equity;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Http\Requests\QuoteStoreRequest;
use App\Notifications\Admin\AlertAdmin;
use App\Notifications\User\QuoteEnquiry;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\ConnectionInterface as DB;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder as RB;

class QuoteController extends Controller
{
    private $db;
    private $quote;

    /**
    *Inject models into the constructor
    *
    * @param DB $db
    * @param Quote $quote
    */
    public function __construct(DB $db, Quote $quote)
    {
        $this->db = $db;
        $this->quote = $quote;
    }

    /**
     * Store newly created quote to the storage.
     * 
     * @param QuoteStoreRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(QuoteStoreRequest $request)
    {
        $this->db->beginTransaction();

        $quote = new $this->quote();
        $quote->property_value = $request->property_value;
        $quote->mortgage_value = $request->mortgage_value;
        $quote->mortgage_type = $request->mortgage_type;
        $quote->first_name = $request->first_name;
        $quote->last_name = $request->last_name; 
        $quote->title = $request->title;
        $quote->date_Of_Birth = $request->date_Of_Birth;
        $quote->email = $request->email;
        $quote->phone_number = $request->phone_number;
        $quote->full_address = $request->full_address;
        $quote->save();

        $quote->notify(new QuoteEnquiry(
            $quote
        ));

        Notification::route('mail', config('mail.support_address'))
            ->notify(new AlertAdmin(
                $quote
        ));

        $this->db->commit();

        return RB::asSuccess()
          ->withMessage('working')
          ->build();

    }

    /*
    *
    *
    */
    public function quotes(Request $request)
    {
        SEOMeta::setTitle('Online Mortgage Quote | Mortgages');
        SEOMeta::setDescription('Get a quote today for your mortgage or remortgage loan from credible providers across the Uk. Our experts are ready to help, SmartMortgages UK, get a quote.today.');

        if($request->type == 'all')
        {
            $mortgage = Mortgage::all();   
        }
        if($request->type == 'mortgage')
        {
            $mortgage = Mortgage::where('id', $request->id)->get();  
        }
        if($request->type == 'equity')
        {
            $mortgage = Equity::where('id', $request->id)->get();     
        }
        if($request->type == 'loan')
        {
            $mortgage = Loan::where('id', $request->id)->get();     
        }
        else
        {
            $mortgage = Mortgage::all();
        }
        
        
        return view('custom',  compact('mortgage'));
    }
}