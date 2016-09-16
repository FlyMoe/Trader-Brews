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

        $beername = $request->input('name');
        $brewery = $request->input('brewery');
        // $firstname = $request->input('firstname');
        // $lastname = $request->input('lastname');
        $name = $request->input('firstname') . " " . $request->input('lastname');

        $cellars = DB::table('cellars')
                    ->join('users', 'cellars.user_id', '=', 'users.id')
                    //->select('cellars.*', 'profile.*')
                    ->where('cellars.name', $beername)
                    ->orWhere('cellars.brewery', $brewery)
                    ->orWhere('users.name', $name)
                    ->get();
        print_r($cellars);
        //printf('<pre>%s</pre>', print_r($cellars, 1));
        return view('search_results', compact('cellars'));
    }

}
