<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporKejadian extends Model
{
    protected $table = 'lapor_kejadian';
    protected $fillable = [
        'nama_pelapor',
        'pesan',
        'link_maps',
        'image',
    ];
}
