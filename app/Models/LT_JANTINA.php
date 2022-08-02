<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_JANTINA extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_jantina';

    protected $primaryKey = 'kod_jantina';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_jantina'];

    public function kodjantina(){
        return $this->hasMany(TB_STAF::class, 'jantina','jantina');
    }
}