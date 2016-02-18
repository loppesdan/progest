<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'descricao', 'unidade', 'subitem_id', 'marca'
    ];

    public function subItem() {
        return $this->belongsTo('App\SubItem');
    }
    
    public function empenhos(){
        return $this->belongsToMany('App\Empenho')->withTimestamps()->withPivot('quant', 'vl_total');;
    }

}
