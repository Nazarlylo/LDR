<?php namespace Modules\Product\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    protected $table = 'products';
    public $translatedAttributes = ['name','value'];
    protected $fillable = ['name','value'];
}
