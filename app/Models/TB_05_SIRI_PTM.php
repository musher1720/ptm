<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_05_PTM;
use App\Models\TB_05_TEMPAT_PTM;
use App\Models\TB_INSTITUSI;

class TB_05_SIRI_PTM extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_05_siri_ptm';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = true;

    public function idsiriptm(){
        return $this->hasOne(TB_05_PTM::class, 'id_siri','id');
    }

    public function idtempatptm(){
        return $this->hasOne(TB_05_TEMPAT_PTM::class, 'tempat','id');
    }

    public function pengelola(){
        return $this->hasOne(TB_INSTITUSI::class, 'pengelola','id_institusi');
    }
}