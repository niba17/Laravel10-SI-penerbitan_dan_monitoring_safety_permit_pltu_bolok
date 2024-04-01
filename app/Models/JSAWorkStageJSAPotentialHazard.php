<?php

namespace App\Models;

use App\Models\JSAWorkStage;
use App\Models\JSAPotentialHazard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorkStageJSAPotentialHazard extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_work_stage_jsa_potential_hazard';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_work_stage()
    {
        return $this->belongsTo(JSAWorkStage::class, 'jsa_work_stage_uuid');
    }

    public function jsa_potential_hazard()
    {
        return $this->belongsTo(JSAPotentialHazard::class, 'jsa_potential_hazard_uuid');
    }
}
