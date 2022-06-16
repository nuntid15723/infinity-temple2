<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeofleave extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table = 'typeofleaves';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Fullname',
        'email',
        'Typeofleave',
        'lafile',
        'startla',
        'endla',
        'hour',
        'reasonla',
    ];

}
