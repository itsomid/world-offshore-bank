<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;
//    protected $guarded =[
//        'name','registered_name','slug','bic','website','email','short_description','description','founded',
//    ];
    protected $guarded = [];
    protected $dates = ['founded'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function deleteImage()
    {
        \Storage::delete($this->img_1);
    }
}
