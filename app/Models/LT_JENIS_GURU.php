<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_JENIS_GURU extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_jenis_guru';

    protected $primaryKey = 'kod_jenis_guru';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_jenis_guru'];

    public function kodjenisguru(){
        return $this->hasOne(TB_STAF::class, 'jenis_guru','jenis_guru');
    }
}