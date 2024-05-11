<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_file',
        'file',
        'original_name',
        'tipe',
    ];


    protected $primaryKey = 'id';
    protected $table = 'docs';
    protected $guarded = ['id'];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

}
