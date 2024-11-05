<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    //
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'username',
        'password',
        'nis',
        'nisn',
        'nama_profil',
        'tanggal_lahir',
        'no_telepon',
        'email',
        'alamat',
        'status_akun',
    ];
}