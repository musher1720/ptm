<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_TARAF_PERKAHWINAN extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_taraf_perkahwinan';

    protected $primaryKey = 'kod_taraf_perkahwinan';

    // protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_taraf_perkahwinan'];

    public function kodtarafperkahwinan(){
        return $this->hasOne(TB_STAF::class, 'taraf_perkahwinan','taraf_perkahwinan');
    }
}