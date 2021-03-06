<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class RegisterController extends Controller
{
     public function __construct()
    {
        // User has to log into the profile page
        //$this->middleware('auth');
        //$this->middleware('guest', ['except' => 'getLogout']);
        $this->middleware('auth');
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
        // Validate the data
        // $this->validate($request, array(
        //         'firstname' => 'required|max:255',
        //         'lastname' => 'required|max:255',
        //         'address' => 'required|max:255',
        //         'zipcode' => 'required|integer',
                //'phonenumber' => 'required|numeric|phone',
            // ));

        // Store in the database
        echo "DUDE";
        $user = new User();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // $profile = new Profile();
        // $profile->user_id = $user()->id;
        // $profile->firstname = $request->input('firstname');
        // $profile->lastname = $request->input('lastname');
        // $profile->address = $request->input('address');
        // $profile->zipcode = $request->input('zipcode');
        // $profile->phonenumber = $request->input('phonenumber');
        // $profile->save();
        flash('Record has been Saved!', 'success');
        // Redirect to another page
        return view('profile');
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
