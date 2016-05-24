<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stores;


class StoresController extends Controller
{

    public function index($idStore = null)
    {
        if(!isset($idStore))
        {
            $articles = Stores::All();
        }
        /*else
        {
            $professionals = Stores::getBySkillName($idStore);
        }*/

        return view('stores.index')->withArticles($articles);
    }

    public function create()
    {
        return view('stores.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Stores::create($input);
        $request->session()->flash('message_add_success', '1');

        return redirect()->route('stores.index');

    }
}
