<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Users.Admin.adminIndex');
    }

    public function allMembers()
    {
        $userData = User::get();
        $memberData = Member::get();
        return view('Users.Admin.allMembers')->with('memberData', $memberData);
    }

    //All Partners
    public function allPartners(){
        $userData = User::get();
        $partnerData = Partner::get();
        return view('Users.Admin.allPartners')->with('partnerData', $partnerData);
    }

    //All Volunteers
    public function allVolunteers(){
        $userData = User::get();
        $volunteerData = Volunteer::get();
        return view('Users.Admin.allVolunteers')->with('partnerData', $volunteerData);
    }

    //All Donors
    public function allDonors(){
        return view('Users.Admin.allDonors');
    }

    //All Deliveries
    public function allDeliveries(){
        return view('Users.Admin.allDeliveries');
    }

    //Delete Member
    public function deleteMember($id){
        Member::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        return back()->with(['memberDeleted' => 'Member Has Been Deleted Successfully!']);
    }

    //Delete Partner
    public function deletePartner($id){
        Member::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
    }

    //Delete Volunteer
    public function deleteVolunteer($id){
        Volunteer::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
    }

    //Update Member
    public function updateMember($id){

    }

    //Update Partner
    public function updatePartner($id){

    }

    //Update Volunteer
    public function updateVolunteer($id){

    }
}
