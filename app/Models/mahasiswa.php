<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pelapor', 'nama_tenant', 'deskripsi_laporan'];
    protected $table = 'mahasiswa';
    public $timestamps = false;
}
