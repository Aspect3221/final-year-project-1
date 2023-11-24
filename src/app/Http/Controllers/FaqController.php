<?php

namespace App\Http\Controllers;

use AmrShawky\Currency;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\Http;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('faq');
    }

    public function nisabRate() {
        //call api to get the current value of gold and silver
        $goldResponse = Http::withHeaders([
            'x-access-token' => env('GOLD_API_TOKEN'),
            'Content-Type' => "application/json"
        ])->get('https://www.goldapi.io/api/XAU/USD');

        $silverResponse = Http::withHeaders([
            'x-access-token' => env('GOLD_API_TOKEN'),
            'Content-Type' => "application/json"
        ])->get('https://www.goldapi.io/api/XAG/USD');

        //convert to nisab value
        $gold = (float) $goldResponse->json('price_gram_24k') * 87.48;
        $silver = (float) $silverResponse->json('price_gram_24k') * 612.36;

        $exchangeRate = 15.35;
        //convert to maldivian currency
        $convertedGold = $gold * $exchangeRate;
        $convertedSilver =  $silver * $exchangeRate;

        return redirect()->back()->with(['gold' => $convertedGold, 'silver' => $convertedSilver]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
    }
}
