<?php

namespace App\Models;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "company"
    ];
    public function parking_card(){
        return $this->hasOne(parking_card::class);
    }
}
