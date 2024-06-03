<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    // protected $primryKey = "idpetugas";

    /* protected $fillable = [
        "namapetugas",
        "username",

    ]; */

    public function level(){
        return $this->belongsTo(level::class);
    }
}
