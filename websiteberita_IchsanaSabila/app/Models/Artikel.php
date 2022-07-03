<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;

    protected $table='artikel';

    protected $fillable =[
        'judul','nama_artikel','slug','deksripsi','kategori_id','gambar_artikel'
    ];

    protected $hidden = [];

    public function kategori()
    {
        return $this->BelongsTo(kategori::class,'kategori_id','id');
    }

    public function users()
    {
        return $this->BelongsTo(user::class,'user_id','id');
    }
}
