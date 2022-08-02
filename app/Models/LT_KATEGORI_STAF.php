<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_KATEGORI_STAF extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_kategori_staf';

    protected $primaryKey = 'kod_kategori_staf';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_kategori_staf'];

    public function kodkategoristaf(){
        return $this->hasOne(TB_STAF::class, 'kategori_staf','kategori_staf');
    }
}