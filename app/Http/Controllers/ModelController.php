<?php

namespace App\Http\Controllers;

use App\Models\Member;

class ModelController extends Controller
{
    public function accessorBasic(): string
    {
        return Member::findOrFail(2)->email;
    }
}
