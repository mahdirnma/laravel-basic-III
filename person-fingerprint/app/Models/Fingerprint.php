<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    use HasFactory;
    protected $fillable=[
        "year",
        "person_id"
    ];
    public function person(){
        return $this->belongsTo(Person::class);
    }
}
