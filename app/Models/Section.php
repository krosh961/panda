<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
    function language()
    {
        return $this->belongsTo('App\Models\Lang', 'lang_id');
    }

    function lessons()
    {
        return $this->hasMany('App\Models\TypeSection');
    }
}
