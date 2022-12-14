<?php

namespace App\Models;

use App\Models\User;
use App\Models\Expectation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserExpectation extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function expectations()
    {
        return $this->belongsToMany(Expectation::class);
    }

    protected $fillable = [
        'user_id',
        'expectations_id',
        'expect',
    ];
}
