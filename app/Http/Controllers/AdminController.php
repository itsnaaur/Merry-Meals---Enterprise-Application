<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\User;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('Users.Admin.allVolunteers')->with('volunteerData', $volunteerData);
    }

    //All Menus
    public function allMenus(){
        $menuData = Menu::all();
        return view('Users.Admin.allMenus')->with(['menuData' => $menuData]);
    }
    

    //All Donors
    public function allDonors(){
        return view('Users.Admin.allDonors');
    }

    //All Deliveries
    public function allDeliveries(){
        return view('Users.Admin.allDeliveries');
    }

    //Delete Menu
    public function deleteMenu($id)
    {
        $deleteData = Menu::select('menu_image')->where('id', $id)->first();
        $deleteImage = $deleteData['menu_image'];

        Menu::where('id', $id)->delete();

        if (File::exists(public_path() . '/uploads/meal/' . $deleteImage)) {
            File::delete(public_path() . '/uploads/meal/' . $deleteImage);
        }

        return redirect()->route('admin#allMenus')->with(['menuDeleted' => 'Menu Has Been Deleted Successfully!']);
    }

    //Update Menu
    public function updateMenu($id)
    {
        $partner_data =  Partner::get();
        $user_data = User::get();
        $updateMenu = Menu::where('id', $id)
            ->first();
        return view('Users.Partner.partnerUpdateMenu')->with(['updateMenu' => $updateMenu, 'userData' => $user_data, 'partnerData' => $partner_data]);
    }
    public function saveUpdateMenu(Request $request, $id)
    {
        $updateData = $this->requestUpdateMenuData($request);

        $updateImgData = Menu::select('menu_image')->where('id', $id)->first();
        $updateImage = $updateImgData['menu_image'];

        if (File::exists(public_path() . '/uploads/meal/' . $updateImage)) {
            File::delete(public_path() . '/uploads/meal/' . $updateImage);
        }

        $newImageFile = $request->file('menu_image');
        $newImageName = uniqid() . '_' . $newImageFile->getClientOriginalName();
        $newImageFile->move(public_path() . './uploads/meal/', $newImageName);

        $updateData['menu_image'] = $newImageName;

        Menu::where('id', $id)->update($updateData);
        return redirect()->route('admin#allMenus')->with(['updateData' => 'Menu Has Been Updated Sucessfully!']);
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
        return back()->with(['partnerDeleted' => 'Partner Has Been Deleted Successfully!']);
    }

    //Delete Volunteer
    public function deleteVolunteer($id){
        Volunteer::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        return back()->with(['volunteerDeleted' => 'Volunteer Has Been Deleted Successfully!']);
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
