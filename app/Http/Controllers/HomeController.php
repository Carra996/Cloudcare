<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = ($request->input('page')) ? $request->input('page') : 1;

        if($request->session()->has('token')){
            
            $call = Request::create('/api/beer?page='.$page, 'GET');
            $call->headers->set('Accept','application/json');
            $call->headers->set('Authorization','Bearer '.$request->session()->get('token'));
            
            $risposta = app()->handle($call);
            $rispostaBody = json_decode($risposta->getContent());

            return view('dashboard', ['beers' => $rispostaBody]);
        }else{
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){ 
                $user = Auth::user(); 
                $request->session()->put('token', $user->createToken('MyApp')->accessToken);
    
                $call = Request::create('/api/beer?page='.$page, 'GET');
                $call->headers->set('Accept','application/json');
                $call->headers->set('Authorization','Bearer '.$request->session()->get('token'));
               
                $risposta = app()->handle($call);
                $rispostaBody = json_decode($risposta->getContent());
                
                return view('dashboard', ['beers' => $rispostaBody]);
            }else{
                return redirect('/login');
            }
        }         
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
