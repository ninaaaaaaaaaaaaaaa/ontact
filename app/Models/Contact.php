<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|size:8',
        'address' => 'required',
        'opinion' => 'required|max:120',
    );

    protected $fillable=[
        'id','fullname','gender','email','opinion','postcode','address','building_name'
    ];
}

