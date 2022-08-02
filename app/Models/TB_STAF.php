<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\LT_GELARAN;
use App\Models\LT_JANTINA;
use App\Models\LT_AGAMA;
use App\Models\LT_NEGERI;
use App\Models\LT_KETURUNAN;
use App\Models\LT_TARAF_PERKAHWINAN;
use App\Models\LT_STATUS_WARGANEGARA;
use App\Models\LT_KUMP_DARAH;
use App\Models\LT_INSTITUSI;
use App\Models\LT_KATEGORI_STAF;
use App\Models\LT_JENIS_GURU;
use App\Models\LT_STATUS;
use App\Models\TB_05_PTM;

class TB_STAF extends Model
{
    use HasFactory;

    public $sequence = 'TESTSEQ_ID';

    public $timestamps = false;

    protected $table = 'TB_STAF';

    protected $primaryKey = 'id_staf';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $fillable = [
        'id_staf',
        'kategori_staf',
        'nama',
        'gelaran',
        'jantina',
        'tarikh_lahir',
        'negeri_lahir',
        'nokp',
        'nokp_lain',
        'agama',
        'keturunan',
        'taraf_perkahwinan',
        'status_warganegara',
        'warganegara',
        'kump_darah',
        'no_fail_peribadi',
        'no_kwsp',
        'no_cukai',
        'jenis_guru',
        'status',
        'id_institusi',
        'no_daftar_oku',
    ];

    public function idstaf(){
        return $this->hasOne(TB_05_PTM::class, 'id_staf','id_staf');
    }

    public function kodgelaran(){
        return $this->hasMany(LT_GELARAN::class, 'gelaran','kod_gelaran');
    }

    public function kodjantina(){
        return $this->hasMany(LT_JANTINA::class, 'jantina','kod_jantina');
    }

    public function kodnegeri(){
        return $this->hasOne(LT_NEGERI::class, 'negeri_lahir', 'kod_negeri');
    }

    public function kodagama(){
        return $this->hasOne(LT_AGAMA::class, 'agama','kod_agama');
    }

    public function kodketurunan(){
        return $this->hasOne(LT_KETURUNAN::class, 'keturunan','kod_keturunan');
    }

    public function kodtarafperkahwinan(){
        return $this->hasOne(LT_TARAF_PERKAHWINAN::class, 'taraf_perkahwinan','kod_taraf_perkahwinan');
    }

    public function kodstatuswarganegara(){
        return $this->hasOne(LT_STATUS_WARGANEGARA::class, 'warganegara','kod_status_warganegara');
    }

    public function warganegara(){
        return $this->hasOne(LT_STATUS_WARGANEGARA::class, 'warganegara','kod_status_warganegara');
    }

    public function kodkumpdarah(){
        return $this->hasOne(LT_KUMP_DARAH::class, 'kump_darah','kod_kump_darah');
    }

    public function idinstitusi(){
        return $this->hasOne(LT_INSTITUSI::class, 'id_institusi','id_institusi');
    }

    public function kodkategoristaf(){
        return $this->hasOne(LT_KATEGORI_STAF::class, 'kategori_staf','kod_kategori_staf');
    }

    public function kodjenisguru(){
        return $this->hasOne(LT_JENIS_GURU::class, 'jenis_guru','kod_jenis_guru');
    }

    public function kodstatus(){
        return $this->hasOne(LT_STATUS::class, 'status','kod_status');
    }

}
