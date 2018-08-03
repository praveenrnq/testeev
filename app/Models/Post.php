<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use Sortable;

    protected $fillable = [
        'title', 'description', 'status','author'
    ];

    public $sortable = ['id','title','status','author','created_at'];
}
