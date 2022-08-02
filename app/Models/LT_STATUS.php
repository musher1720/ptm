<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_STATUS extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_status';

    protected $primaryKey = 'kod_status';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_status'];

    public function kodstatus(){
        return $this->hasOne(TB_STAF::class, 'status','status');
    }
}