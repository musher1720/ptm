<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_KETURUNAN extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_keturunan';

    protected $primaryKey = 'kod_keturunan';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_keturunan'];

    public function kodketurunan(){
        return $this->hasOne(TB_STAF::class, 'keturunan','keturunan');
    }
}