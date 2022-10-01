<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //Admin Dashboard
    public function index()
    {
        return view('Users.Admin.allMembers');
    }

    //All Partners
    public function allPartners(){
        return view('Users.Admin.allPartners');
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
