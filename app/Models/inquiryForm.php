<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiryForm extends Model
{
    protected $table = 'inquiryform';
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'emailAddress',
        'clientMessage',
        'token',
    ];

    
}
