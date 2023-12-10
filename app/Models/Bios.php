<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bios extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
