<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

use Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {

            User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password)
            ]);

            Session::flash('message', 'Usuário cadastrado com sucesso'); 
            Session::flash('alert-class', 'alert-success'); 

        }
        catch(Exception $err)
        {
            Session::flash('message', $err->getMessage()); 
            Session::flash('alert-class', 'alert-danger'); 
        }
        
        return view('users.create');
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
        $user = User::findOrFail($id);

        return view('users.update',['user' => $user]);
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
        try
        {
            $user = User::findOrFail($id);

            if(strlen($request->new_password) > 0)
            {
                $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => \Hash::make($request->new_password)
                ]);
            }
            else
            {
                $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

           

            Session::flash('message', 'Usuário atualizado com sucesso'); 
            Session::flash('alert-class', 'alert-success'); 

        }
        catch(Exception $err)
        {
            Session::flash('message', $err->getMessage()); 
            Session::flash('alert-class', 'alert-danger'); 
        }
        
        return \Redirect::route('edicao_usuario', $id);
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

    public function Logout(){
        Auth::logout();
        return redirect('/'); //redireciona o usuario para a pagina inicial
    }
}
