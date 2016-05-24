<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use Validator;
use App\Stores;


class ArticlesController extends Controller
{
    const ERROR_MESSAGE_NO_ID = "Bad Request";
    const ERROR_MESSAGE_NO_STORE = "Record not found";

    public function index($idStore = null)
    {
        if(!isset($idStore))
        {
            $articles = Articles::All();
        }
        /*else
        {
            $professionals = Stores::getBySkillName($idStore);
        }*/

        return view('articles.index')->withArticles($articles);
    }

    public function create()
    {
        return view('articles.add')->with('Stores', Stores::lists('name', 'id')->toArray());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'           => 'required',
            'description'    => 'required',
            'price'          => 'required|numeric',
            'total_in_shelf' => 'required|numeric',
            'total_in_vault' => 'required|numeric',
            'store_id'       => 'required',
        ]);

        $input = $request->all();
        Articles::create($input);
        $request->session()->flash('message_add_success', '1');

        return redirect()->route('articles.index');

    }

    public function listArticles()
    {
        //$bla = Articles::find(1);
        //dd($bla->stores->address);
        $articles = Articles::getArticlesList();

        return response()->json(
            [
                'articles' => $articles,
                'success' => true,
                'total_elements' => count($articles)
            ]
        );
    }

    public function listArticlesByStoreId($id = null)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|numeric',
        ]);

        if ($validator->fails())
        {
            return response()->json(
                [
                    'error_msg' => self::ERROR_MESSAGE_NO_ID,
                    'error_code' => 400,
                    'success' => false,
                ]
            );

        }

        $articles = Articles::getArticlesList($id);

        // No utilice Model-binding porque en este caso es mas sencillo lanzar el error aca q levantar una excepcion
        // en el model atraparla y manejarla
        if($articles)
        {
            return response()->json(
                [
                    'articles' => $articles,
                    'success' => true,
                    'total_elements' => count($articles)
                ]
            );
        }
        else
        {
            return response()->json(
                [
                    'error_msg' => self::ERROR_MESSAGE_NO_STORE,
                    'error_code' => 404,
                    'success' => false,
                ]
            );

        }
    }
}
