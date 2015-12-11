<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;
class tes extends Model {

    public function year()
    {
        return $this->hasMany('App\Models\testt');
    }

	public function findAlls(){
     // $model =  tes::where('nose', '>', 55)->publick()->get();
       $model = tes::find(1)->year;
        return $model;
    }

    public function scopePublick($query){
        $query->where('id', '<', 6);
    }

}
