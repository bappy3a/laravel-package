<?php

namespace Bappy3a\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModels extends Model
{
    use HasFactory;
    public $guarded = [];

    public function getUppercasedName() :string
    {
        return strtoupper($this->name);
    }
}
