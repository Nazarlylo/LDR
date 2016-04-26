<?php namespace Modules\Category\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'category';
    public $translatedAttributes = ['name', 'slug'];
    protected $fillable = ['parent_id','name', 'slug'];
}
