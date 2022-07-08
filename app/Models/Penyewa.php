<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = "penyewas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama','model_id','alamat','umur','lama'
    ];

    public function model(){
        return $this->belongsTo(Gallery::class);
    }
}