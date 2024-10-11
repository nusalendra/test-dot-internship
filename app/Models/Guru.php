<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = ['nama', 'mata_pelajaran'];
    protected $guarded = [];

    public function siswa() {
        return $this->hasMany(Siswa::class, 'guru_id');
    }
}
