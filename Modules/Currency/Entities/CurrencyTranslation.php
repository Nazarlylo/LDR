<?php namespace Modules\Currency\Entities;

use Illuminate\Database\Eloquent\Model;

class CurrencyTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $table = 'currency_lang';
}
