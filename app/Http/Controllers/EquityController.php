<?php

namespace App\Http\Controllers;

use App\Equity;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class EquityController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Equity  $equity
     * @return \Illuminate\Http\Response
     */
    public function show(string $url)
    {
        $equity = Equity::where('url', $url)->firstOrFail();

        SEOMeta::setTitle($equity->meta_title);
        SEOMeta::setDescription($equity->meta_description);

        return view('description-equity', compact('equity'));
    }
}
