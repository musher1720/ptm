<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_05_SIRI_PTM;

class TB_INSTITUSI extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_institusi';

    protected $primaryKey = 'kod_institusi';

    protected $keyType = 'string';

    public $incrementing = true;

    public function pengelola(){
        return $this->hasOne(TB_05_SIRI_PTM::class, 'id_institusi','pengelola',);
    }
}