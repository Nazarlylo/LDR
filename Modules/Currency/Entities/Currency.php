<?php namespace Modules\Currency\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use Translatable;

    public $translatedAttributes = ['name','value'];
    protected $fillable = ['value','name'];
    protected $table = 'currencies';
}
