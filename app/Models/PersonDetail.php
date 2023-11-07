<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonDetail extends Model
{
    use HasFactory;
    protected $table = 'person_detail';
    protected $primaryKey = 'id';
}
