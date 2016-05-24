<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price', 'total_in_shelf', 'total_in_vault', 'store_id'];

    public function stores()
    {
        return $this->belongsTo('App\Stores', 'store_id');
    }

    public static function getArticlesList($idStore = null)
    {
        $data = array();
        if($idStore){
            $articles = self::where('store_id', '=', $idStore)->get();
        }
        else
        {
            $articles = self::all();
        }
        foreach ($articles as $article)
        {
            $data[] = array(
                'id'             => $article->id,
                'description'    => $article->description,
                'name'           => $article->name,
                'price'          => $article->price,
                'total_in_shelf' => $article->total_in_shelf,
                'total_in_vault' => $article->total_in_vault,
                'store_name'     => $article->stores->name,
            );
        }

        return $data;
    }
}
