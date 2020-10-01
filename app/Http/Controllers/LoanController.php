<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class LoanController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(string $url)
    {
        $loan = Loan::where('url', $url)->firstOrFail();

        SEOMeta::setTitle($loan->meta_title);
        SEOMeta::setDescription($loan->meta_description);
        
        return view('description-loan', compact('loan'));
    }
}
