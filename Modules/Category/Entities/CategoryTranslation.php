<?php namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','slug'];
    protected $table = 'category_lang';
}
