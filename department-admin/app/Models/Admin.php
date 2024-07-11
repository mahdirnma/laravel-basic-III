<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "age",
        "department_id",
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }

}
