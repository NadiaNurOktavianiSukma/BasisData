<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galleries";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','model'
];

    public function penyewa(){
        return $this->hasMany(Penyewa::class);
    }
}