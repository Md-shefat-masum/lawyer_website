<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeConsultation extends Model
{
    public function law()
    {
        return $this->belongsTo('App\LawList','law_name');
    }
}
