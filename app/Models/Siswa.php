<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nis','nama', 'alamat', 'tanggal'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function wali(){
        // data dari model 'Siswa' bisa dimiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->hasOne(Wali::class,'id_siswa');
    }

    // membuat relasi one to many di model 
    public function guru(){
        // data dari model 'Siswa' bisa dimiliki 
        // oleh model 'Guru' melalui 'id_siswa'
        return $this->belongsTo(Guru::class,'id_guru');
    }
}
