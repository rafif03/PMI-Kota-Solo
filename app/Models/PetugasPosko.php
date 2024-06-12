<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasPosko extends Model
{
    use HasFactory;

    protected $table = 'petugas_posko';
    protected $primaryKey = 'id_petugas_posko';
    public $timestamps = true;

    protected $fillable = [
        'nama_lengkap',
        'kontak'
    ];

    public function kejadianBencana()
    {
        return $this->hasMany(KejadianBencana::class, 'id_petugas_posko');
    }
}
