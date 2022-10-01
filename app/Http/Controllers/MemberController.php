<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberData = Member::paginate(4);
        // dd($member);
        return view('Users.Member.memberIndex')->with('memberData', $memberData);
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
    public function viewAllMenu()
    {
        $menuData = Menu::all();
        return view('Users.Member.memberMenu')->with(['menuData' => $menuData]);
    }
    public function viewMenu($id)
    {
        $partner_data =  Partner::get();
        $user_data = User::get();
        $viewMenu = Menu::where ('id', $id)
                    ->first();
        return view('Users.Member.memberMenuDetails')->with(['viewMenu' => $viewMenu,
        'userData' => $user_data, 
        'partnerData' => $partner_data,
    ]);
    }
}