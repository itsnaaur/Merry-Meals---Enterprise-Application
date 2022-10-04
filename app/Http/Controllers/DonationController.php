<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\DonationFee;

class DonationController extends Controller
{
    
    // get donationfee
    public function getDonor(){
        return view('donation.donor');
    }

    // save donationfee
    public function saveDonationFee(Request $req){
        $donationFee= new DonationFee();
        // $donationFee->id = $req->input('id');
        $donationFee->donor_fee=$req->input('donor_fee');
        $donationFee->donor_tribute=$req->input('donor_tribute');
        $donationFee->donor_honoree_name=$req->input('donor_honoree_name');
        $donationFee->save();
        return redirect()->route('donation#saveDonationFee');
    }

    // get billing
    public function getBilling(){
        return view('donation.billing');
    }

    // save billing 
    public function saveBilling(Request $req){
        $billing= new Donation();
        $billing->id = $req->input('id');
        $billing->donor_first_name=$req->input('donor_first_name');
        $billing->donor_last_name=$req->input('donor_last_name');
        $billing->donor_email=$req->input('donor_email');
        $billing->donor_phone=$req->input('donor_phone');
        $billing->donor_address=$req->input('donor_address');
        $billing->donor_city=$req->input('donor_city');
        $billing->donor_state=$req->input('donor_state');
        $billing->donor_country=$req->input('donor_country');
        $billing->save();
        return redirect()->route('billing#saveBilling');
    }

    // get payment
    public function getPayment(){
        return view('donation.payment');
    }

    // get completion 
    public function getCompletion(){
        return view('donation.completion');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
