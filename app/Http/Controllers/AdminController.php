<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //Admin Dashboard
    public function index()
    {
        // $memberData = Member::paginate(4);
        // dd($member);
        return view('Users.Admin.allMembers');
    }

    //All Partners
    public function allPartners(){
        return view('Users.Admin.allPartners');
    }

    //All Volunteers
    public function allVolunteers(){
        return view('Users.Admin.allVolunteers');
    }

    //All Donors
    public function allDonors(){
        return view('Users.Admin.allDonors');
    }

    //All Deliveries
    public function allDeliveries(){
        return view('Users.Admin.allDeliveries');
    }

    //Delete User
    public function deleteUser($id){

    }

    //Update Member
    public function updateMember(){

    }

    //Update Partner
    public function updatePartner(){

    }

    //Update Volunteer

}
