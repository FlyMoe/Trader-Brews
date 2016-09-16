<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Cellar;
use App\User;
use App\Http\Requests;




class CellarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab all records from the cellar table with the user id
        //$cellars = DB::table('cellars')->where('user_id', Auth::user()->id)->get();

        //printf('<pre>%s</pre>', print_r($cellars, 1));
        //$users = User::where('id', Auth::user()->id)->get();

        $cellars = $this->cellars();
        $users = $this->users();
        $total_beers = $this->total_beers();
        $unique_beers = $this->unique_beers();
        $brewery = $this->brewery();
//printf('<pre>%s</pre>', print_r($unique_beers, 1));
        return view('/cellar', compact('cellars', 'users', 'total_beers', 'unique_beers', 'brewery'));
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
        // Store in the database
        $cellar = new Cellar();
        $cellar->user_id = Auth::user()->id;
        $cellar->name = $request->input('name');
        $cellar->brewery = $request->input('brewery');
        $cellar->size = $request->input('size');
        $cellar->bottle_date = $request->input('bottle_date');
        $cellar->in_cellar = $request->input('in_cellar');
        $cellar->in_fridge = $request->input('in_fridge');
        $cellar->save();
        flash('Record has been Saved!', 'success');

        //printf('<pre>%s</pre>', print_r($cellars, 1));

        // Pull the cellars and users data
        $cellars = $this->cellars();
        $users = $this->users();
        $total_beers = $this->total_beers();
        $unique_beers = $this->unique_beers();
        $brewery = $this->brewery();
// printf('<pre>%s</pre>', print_r($unique_beers, 1));
// var_dump($unique_beers);
        // View the cellar blade
        return view('/cellar', compact('cellars', 'users', 'total_beers', 'unique_beers', 'brewery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        // Find record in the cellar database with the id $id and delete it.
        $cellar = DB::table('cellars')->where('id', $id)->delete();

        // Display success message
        flash('Successfully deleted the cellar entry!', 'success');

        // redirect
        return redirect('/cellar');
    }

    /**
     * Pull all data from the cellars table where the user_id equals the auth id.
     *
     * @return cellars record set
     */
    public function cellars() {
        return (DB::table('cellars')->where('user_id', Auth::user()->id)->get());
    }

     /**
     * Pull all data from the users table where the id equals the auth id.
     *
     * @return users record set
     */
    public function users() {
        return (User::where('id', Auth::user()->id)->get());
    }

     /**
     * Pull all data from the users table where the id equals the auth id.
     *
     * @return cellar record set
     */
    public function total_beers() {
        return (Cellar::where('user_id', Auth::user()->id)->count());
    }

     /**
     * Pull all data from the cellars table where the id equals the auth id and the name is 
     * distinct.
     *
     * @return cellar record set
     */
    public function unique_beers() {
        return (Cellar::where('user_id', Auth::user()->id)->distinct()->count('name'));
    }

     /**
     * Pull all data from the cellars table where the id equals the auth id.
     *
     * @return cellar record set
     */
    public function brewery() {
        return (Cellar::where('user_id', Auth::user()->id)->distinct()->count('brewery'));
    }


}
