<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;
use App\Models\LT_KEPUTUSAN;
use App\Models\TB_05_SIRI_PTM;
use App\Models\TB_05_TEMPAT_PTM;

class TB_05_PTM extends Model
{
    use HasFactory;

    public $sequence = 'TESTSEQ_ID';

    public $timestamps = false;

    protected $table = 'tb_05_ptm';

    protected $primaryKey = 'id_staf';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $fillable = [

        'id_staf',
        'no_kp',
        'id_tempat',
        'id_siri',
        'keputusan',
        'no_siri',
        'no_siri_penuh',

    ];

    public function idstaf(){
        return $this->hasOne(TB_STAF::class, 'id_staf','id_staf');
    }

    public function keputusan(){
        return $this->hasOne(LT_KEPUTUSAN::class, 'kod_keputusan','keputusan');
    }

    public function idsiriptm(){
        return $this->hasOne(TB_05_SIRI_PTM::class, 'id','id_siri');
    }

    public function idtempatptm(){
        return $this->hasOne(TB_05_TEMPAT_PTM::class, 'id','id_tempat');
    }
}
