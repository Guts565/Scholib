<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'deadline',
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    protected $primaryKey = 'id';
    protected $table = 'beasiswas';
    protected $guarded = ['id'];
}
