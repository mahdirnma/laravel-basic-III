<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parking_card extends Model
{
    use HasFactory;
    protected $fillable=[
        "number",
        "expired",
        "employee_id",
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
