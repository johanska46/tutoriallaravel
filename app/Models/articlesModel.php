<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class articlesModel extends Model
{
    use SoftDeletes;
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'author',
        'status'
    ];
    public function getDataArticleByUser()
    {
        return
            articlesModel::select(
                'articles.*', 
                'users_admin.name', 
                'users_admin.email', 
                'users_admin.role',
                'categories.name'
                )
                ->join('users_admin', 'articles.user_id', '=', 'users_admin.id')
                ->join('categories', 'articles.category_id', '=', 'categories.id')
                ->where('articles.status', '=', '1')
                ->get();

        //Select articles.title, articles.slug, categories.name, users.name
        //From articles, categories, users
        //where articles.user.id = users.id and where categories.id = articles.category_id and  where articles.status = '1'



    }
}
