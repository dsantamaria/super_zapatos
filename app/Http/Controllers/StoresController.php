<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stores;


class StoresController extends Controller
{

    public function index()
    {
        $stores = Stores::All();

        return view('stores.index')->withStores($stores);
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

    public function listStores()
    {
        $stores = Stores::All();
        return response()->json(
            [
                'stores' => $stores,
                'success' => true,
                'total_elements' => count($stores)
            ]
        );
    }
}
