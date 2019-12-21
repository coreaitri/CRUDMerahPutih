<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Data extends Model
{
    protected $table = 'data';

    protected function setTanggalLahirAttribute($value)
    {
        $this->attributes['tanggal_lahir'] = $value;
        $this->attributes['usia'] = Carbon::parse($value)->age;
    }
}
