<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function email(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => mb_convert_case($value, MB_CASE_LOWER)
        );
    }

    protected $fillable = ['name', 'email'];
}
