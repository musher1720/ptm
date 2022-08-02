<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_NEGERI extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_negeri';

    protected $primaryKey = 'kod_negeri';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_negeri'];

    public function kodnegeri(){
        return $this->hasOne(TB_STAF::class, 'negeri_lahir','negeri_lahir');
    }
}