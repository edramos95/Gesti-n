<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Project;
use App\ProjectUser;

class UserController extends Controller
{
	public function index()
    {
    	$users = User::all();
    	return view('admin.users.index')->with(compact('users'));
    }

    public function store(Request $request)
    {
    	$rules = [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
    	];

    	$messages = [
    		'name.required' => 'Este campo es obligatorio.',
    		'name.max' => 'Nombre demasiado extenso.',
    		'email.required' => 'Este campo es obligatorio.',
    		'email.email' => 'Correo invalido.',
    		'email.max' => 'Correo demasiado extenso.',
    		'email.unique' => 'Este correo ya existe.',
    		'password.required' => 'Olvidó ingresar una contraseña.',
    		'password.min' => 'La contraseña debe ser de al menos 6 caracteres.'
    	];

    	$this->validate($request, $rules, $messages);

    	$user = new User();
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));
    	$user->role = 1;

    	$user->save();
    	
    	return back()->with('notification', 'Usuario registrado con exito.');
    }

    public function edit($id)
    {
    	$user = User::find($id);
        $projects = Project::all();
        $projects_user = ProjectUser::where('user_id', $user->id)->get();
    	return view('admin.users.edit')->with(compact('user', 'users', 'projects', 'projects_user'));
    }

    public function update($id, Request $request)
    {
    	$rules =[
    		'name' => 'required|max:255',
    		'password' => 'min:6'
    	];

    	$messages = [
    		'name.required' => 'El campo de nombre no puede estar vacio.',
    		'name.max' => 'Nombre demasiado extenso.',
    		'password.min' => 'La contraseña debe ser de al menos 6 caracteres.',
    	];

    	$this->validate($request, $rules, $messages);

    	$user = User::find($id);
    	$user->name = $request->input('name');
        $user->role = $request->input('role');
    	$password = $request->input('password');

    	if($password)
    		$user->password = bcrypt($password);

    	$user->save();

    	return back()->with('notification', 'Usuario modificado con éxito.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('notification', 'El usuario ha sido dado de baja.');
    }
}