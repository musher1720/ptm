<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_AGAMA extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_agama';

    protected $primaryKey = 'kod_agama';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_agama'];

    public function kodagama(){
        return $this->hasOne(TB_STAF::class, 'agama','agama');
    }


}