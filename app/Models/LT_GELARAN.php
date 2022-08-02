<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_GELARAN extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_gelaran';

    protected $primaryKey = 'kod_gelaran';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_gelaran'];

    public function kodgelaran(){
        return $this->hasMany(TB_STAF::class, 'gelaran','gelaran');
    }
}