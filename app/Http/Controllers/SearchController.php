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

class SearchController extends Controller
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
        return view('/search');
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

    public function cellar_Search(Request $request) {

        // Search the database with the beer name, brewery, firstname, or lastname
        $cellars = DB::table('cellars')
                    ->join('users', 'cellars.user_id', '=', 'users.id');
        if (empty($request->input('name')) === false) {
            // Beer Name
            $beername = $request->input('name');
            $cellars = $cellars->where('cellars.name', $beername);
        } elseif (empty($request->input('brewery')) === false) {
            // Brewery
            $brewery = $request->input('brewery');
            $cellars = $cellars->where('cellars.brewery', $brewery);
        } elseif (empty($request->input('firstname')) === false && empty($request->input('lastname')) === false) {
            // Full Name
            $name = trim($request->input('firstname')) . " " . trim($request->input('lastname'));
            $cellars = $cellars->where('users.name', $name);
        } elseif (empty($request->input('firstname')) === false) {
            // First Name
            $name = trim($request->input('firstname'));
            $cellars = $cellars->where('users.name', 'like', $name.'%');
        } elseif (empty($request->input('lastname')) === false) { 
            // Last Name
            $name = trim($request->input('lastname'));
            $cellars = $cellars->where('users.name', 'like', '%'.$name);
        }
        $cellars = $cellars->get();

        //printf('<pre>%s</pre>', print_r($cellars, 1));

        // Redirect to search_results blade
        return view('search_results', compact('cellars'));
    }

}
