<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function beasiswas()
    {
        return $this->hasMany(Beasiswa::class, 'beasiswa_id');
    }
    public function docs()
    {
        return $this->hasMany(Docs::class, 'docs_id');
    }
    protected $primaryKey = 'nim';
    protected $table = 'students';
    protected $guarded = ['nim'];
    protected $fillable = [
        'user_id',
        'beasiswa_id',
        'docs_id',
        'nama',
        'nim',
        'jurusan',
        'jk',
        'ttl',
        'alamat',
        'kota',
        'phone',
        'prodi',
        'tahunMasuk',
        'semester',
        'tahunAjaran',
        'ipk',
        'ayah',
        'pekerjaan',
        'penghasilan',
        'ibu',
        'profesi',
        'gaji',
    ];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->created_at = now();
        $this->updated_at = now();
    }
}
