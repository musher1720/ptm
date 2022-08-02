<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TB_STAF;

class LT_INSTITUSI extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'LT_INSTITUSI';

    protected $primaryKey = 'id_institusi';

    protected $keyType = 'string';

    public $incrementing = true;

    protected $guarded = ['id_institusi'];

    public function idinstitusi(){
        return $this->hasOne(TB_STAF::class, 'id_institusi','id_institusi');
    }
}