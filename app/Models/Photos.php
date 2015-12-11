<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model {

	public function getById(){
        $num = $this->publick()->get();
        return $num;
    }

    public function scopePublick($query){
        $query->where('id', '=', 3);
    }

}
