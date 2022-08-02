<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_KUMP_DARAH extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_kump_darah';

    protected $primaryKey = 'kod_kump_darah';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_kump_darah'];

    public function kodkumpdarah(){
        return $this->hasOne(TB_STAF::class, 'kump_darah','kump_darah');
    }
}