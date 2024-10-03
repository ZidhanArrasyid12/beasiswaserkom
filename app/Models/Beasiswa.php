<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    // Trait HasFactory memungkinkan kita menggunakan factory untuk menghasilkan data model palsu
    // guna keperluan pengujian (testing) atau pengisian data saat pengembangan.
    use HasFactory;

    //mendefinisikan nama tabel yang terkait dengan model ini, yaitu tabel "beasiswa".
    protected $table = "beasiswa";

    // Daftar kolom yang dapat diisi (mass assignable). Kolom-kolom ini dapat diisi secara massal
    // menggunakan method seperti create() atau update() tanpa perlu menetapkannya satu per satu.
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'semester',
        'ipk',
        'beasiswa',
        'file_upload',
        'status_ajuan',
    ];
}
