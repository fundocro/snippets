<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Snippet;
use App\User;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snippets=Snippet::all();
        return view('/user.user_delete',compact('snippets'));
    }
    
    public function create()
    {

        $snippets=Snippet::all();
        return view('/user.user_create',compact('snippets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        //Snippet::create($request->all());
        
        $formInput=$request->all();
        $user=Auth::user();
        
        $user->snippet()->create($formInput);
        //return redirect('/user_display/1');
        return redirect('/user_search');
       
 
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
//        $snippets=Snippet::findOrFail($id);
//        return view('/user.user_edit',compact('snippets'));
//test
        $snippets=Snippet::findOrFail($id);//used for display body of snippet in markup
        
        $all_snippets=Snippet::all();//used for display all snippets
        
        return view('/user.user_display',compact('snippets','all_snippets'));
        
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
        $snippets=Snippet::findOrFail($id);
        $snippets->update($request->all());
        return redirect('/user_display/1');
 
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $snippet=Snippet::findOrFail($id)->delete();
        return redirect('/user_display/1');
        
        
    }
     public function destroy_user($id)
    {
        $user=User::findOrFail($id)->delete();
        return redirect('/user_display/1');
        
        
    }

}
