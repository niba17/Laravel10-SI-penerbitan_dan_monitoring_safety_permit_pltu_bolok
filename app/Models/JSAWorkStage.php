<?php

namespace App\Models;

use App\Models\JSAJSAWorkStage;
use Illuminate\Database\Eloquent\Model;
use App\Models\JSAWorkStageJSAPotentialHazard;
use App\Models\JSAWorkStageJSAPIC;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorkStage extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_work_stages';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_jsa_work_stage()
    {
        return $this->hasMany(JSAJSAWorkStage::class, 'jsa_work_stage_uuid', 'uuid');
    }

    public function jsa_work_stage_jsa_potential_hazard()
    {
        return $this->hasMany(JSAWorkStageJSAPotentialHazard::class, 'jsa_work_stage_uuid', 'uuid');
    }

    public function jsa_work_stage_jsa_pic()
    {
        return $this->hasMany(JSAWorkStageJSAPIC::class, 'jsa_work_stage_uuid', 'uuid');
    }
}
