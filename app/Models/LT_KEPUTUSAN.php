<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LT_KEPUTUSAN extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'lt_keputusan';

    protected $primaryKey = 'kod_keputusan';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['kod_keputusan'];

    public function keputusan(){
        return $this->hasOne(LT_KEPUTUSAN::class, 'keputusan','kod_keputusan');
    }
}