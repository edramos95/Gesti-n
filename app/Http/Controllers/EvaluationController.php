<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\User;
use App\Evaluation;
use DB;

class EvaluationController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index($id)
    {
    	$incidents = Incident::findOrFail($id);

    	return view('incidents.evaluar')->with(compact('incidents'));
    }

    public function store(Request $request)
    {
    	$evaluation = new Evaluation();

    	$this->validate($request, Evaluation::$rules, Evaluation::$messages);

    	

    	$evaluation->client_id = $request->input('client_id');

    	$evaluation->support_id = $request->input('support_id');

    	$evaluation->satisfaccion = $request->input('satisfaccion');
    	$evaluation->tiempo = $request->input('tiempo');
    	$evaluation->desarrollo = $request->input('desarrollo');
    	$evaluation->recomendacion = $request->input('recomendacion');
    	$evaluation->trato = $request->input('trato');
    	$evaluation->calificacion = $evaluation['satisfaccion'] + $evaluation['tiempo'] + $evaluation['desarrollo'] + $evaluation['recomendacion'] + $evaluation['trato'];
    	$evaluation->comentario = $request->input('comentario');

    	$evaluation->save();

    	return back()->with('notification', 'Evaluación guardada con éxito.');
    }

    public function Support($id)
    {
    	$support = DB::select('SELECT support_id FROM incidents WHERE id = $id');
    }
}