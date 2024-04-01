<?php

namespace App\Models;

use App\Models\JSAPIC;
use App\Models\JSAWorkStage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorkStageJSAPIC extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_work_stage_jsa_pic';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_work_stage()
    {
        return $this->belongsTo(JSAWorkStage::class, 'jsa_work_stage_uuid');
    }

    public function jsa_pic()
    {
        return $this->belongsTo(JSAPIC::class, 'jsa_pic_uuid');
    }
}
