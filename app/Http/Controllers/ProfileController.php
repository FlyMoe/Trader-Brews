<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

//use Carbon\Carbon;

class ProfileController extends Controller
{

    public function __construct()
    {
        // User has to log into the profile page
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = $this->profile();

        return view('profile', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        //return view('/profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->validate($request, array(
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'address' => 'required|max:255',
                'zipcode' => 'required|integer',
            ));

        // Store in the database
        $profile = new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->firstname = $request->input('firstname');
        $profile->lastname = $request->input('lastname');
        $profile->address = $request->input('address');
        $profile->zipcode = $request->input('zipcode');
        $profile->phonenumber = $request->input('phonenumber');
        $profile->save();
        flash('Record has been Saved!', 'success');
        // Redirect to another page

        $profiles = $this->profile();

        //return view('profile', compact('profiles'));
        return view('profile', compact('profiles'));
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
         // Validate the data
        $this->validate($request, array(
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'address' => 'required|max:255',
                'zipcode' => 'required|integer',
                //'phonenumber' => 'required|numeric|phone',
            ));

        // Store in the database
        $profile = new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->firstname = $request->input('firstname');
        $profile->lastname = $request->input('lastname');
        $profile->address = $request->input('address');
        $profile->zipcode = $request->input('zipcode');
        $profile->phonenumber = $request->input('phonenumber');
        $profile->save();
        flash('Record has been Updated!', 'success');
        // Redirect to another page

        $profiles = $this->profile();
        //return view('profile', compact('profiles'));
        return redirect('/profile');
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

     /**
     * Pull all data from the profile table where the user_id equals the auth id.
     *
     * @return cellars record set
     */
     public function profile() {
        return (DB::table('profile')->where('user_id', Auth::user()->id)->get());
    }

    /**
     * Redirect 
     *
     * @return cellars record set
     */
     public function updateProfile() {

        $profiles = $this->profile();

        return view('update_profile', compact('profiles'));
    }

}
