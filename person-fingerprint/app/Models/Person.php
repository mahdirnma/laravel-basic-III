<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "age"
    ];

    public function fingerprint()
    {
        return $this->hasOne(Fingerprint::class);
    }
}
