<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['guru_id', 'nama'];
    protected $guarded = [];

    public function guru() {
        return $this->belongsTo(Guru::class);
    }
}
