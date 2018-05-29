<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Incident;
use App\Project;
use App\ProjectUSer;
use App\Level;
use App\UserComputer;
use App\User;
use DB;

class UserComputerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.users.computer')->with(compact('users'));
    }

    public function store(Request $request)
    {

    	$this->validate($request, UserComputer::$rules, UserComputer::$messages);

    	$uc = new UserComputer();

        $uc->id_user = $request->input('id_user');

    	$uc->type = $request->input('type');
        $uc->company = $request->input('company');
    	$uc->model = $request->input('model');
    	$uc->serial = $request->input('serial');
    	$uc->processor = $request->input('processor');
    	$uc->ram = $request->input('ram');
    	$uc->so = $request->input('so');
    	$uc->ofimatic = $request->input('ofimatic');
    	$uc->browser = $request->input('browser');
    	$uc->java = $request->input('java');
    	$uc->adobe = $request->input('adobe');

    	$uc->save();
    	
    	return back()->with('notification', 'Equipo registrado con exito.');
    }

    public function show($id)
    {
        $usercomputer = UserComputer::findOrFail($id);

        return view('admin.users.showPC', compact('usercomputer'));
    }
}