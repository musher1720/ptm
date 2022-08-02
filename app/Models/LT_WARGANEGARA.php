<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_WARGANEGARA extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_status_warganegara';

    protected $primaryKey = 'kod_status_warganegara';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_status_warganegara'];

    public function warganegara(){
        return $this->hasOne(TB_STAF::class, 'warganegara','warganegara');
    }
}