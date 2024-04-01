<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JSAImpactJSADangerControl;
use App\Models\JSAPotentialHazardJSAImpact;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAImpact extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_impacts';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_potential_hazard_jsa_impact()
    {
        return $this->hasMany(JSAPotentialHazardJSAImpact::class, 'jsa_impact_uuid', 'uuid');
    }

    public function jsa_impact_jsa_danger_control()
    {
        return $this->hasMany(JSAImpactJSADangerControl::class, 'jsa_impact_uuid', 'uuid');
    }
}
