<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JSAPotentialHazardJSAImpact;
use App\Models\JSAWorkStageJSAPotentialHazard;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAPotentialHazard extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_potential_hazards';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_work_stage_jsa_potential_hazard()
    {
        return $this->hasMany(JSAWorkStageJSAPotentialHazard::class, 'jsa_potential_hazard_uuid', 'uuid');
    }

    public function jsa_potential_hazard_jsa_impact()
    {
        return $this->hasMany(JSAPotentialHazardJSAImpact::class, 'jsa_potential_hazard_uuid', 'uuid');
    }
}
