<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_05_PTM;

class TB_05_TEMPAT_PTM extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tb_05_tempat_ptm';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = true;

    public function idsiritempatptm(){
        return $this->hasOne(TB_05_SIRI_PTM::class, 'id','tempat');
    }

    public function idtempatptm(){
        return $this->hasOne(TB_05_PTM::class, 'id','id_tempat');
    }

}