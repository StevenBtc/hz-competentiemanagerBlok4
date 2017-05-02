<?php

namespace App\Http\Controllers;

use App\Models\Competency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserCompetenciesController extends Controller
{
    private $user_competencies;
    public function index()
    {
        return view('userCompetencies/index', [
            'comps' => Competency::all(),
            //'competencies' => DB::table('competencies')->pluck('name', 'abbreviation'),
        ]);
    }

    public function store(Request $request)
    {
        DB::table('user_competencies')->insert(
            ['user_id' => Auth::user()->id, 'competency_id' => $request['comp_id']]
        );
        return redirect('userCompetencies')->with('success', 'Uw competentie is gekozen');
    }

    public function show(Request $request)
    {
        return view('userCompetencies/show', [

        ]);
    }

    public function destroy($id)
    {
        // Find the competency object in the databas
        $user = User::find(Auth::id());
        $user->competencies()->detach($id);

        return redirect('userCompetencies/show')->with('success', 'Uw competentie is verwijderd');
        // Redirect to the competency. index page with a succes message.
//        return redirect('competency')->with('success', $competency->name.' is verwijderd.');
    }
}
