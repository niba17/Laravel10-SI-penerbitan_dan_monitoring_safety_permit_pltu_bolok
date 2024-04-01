<?php

namespace App\Models;

use App\Models\JSAImpact;
use App\Models\JSAPotentialHazard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAPotentialHazardJSAImpact extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_potential_hazard_jsa_impact';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_potential_hazard()
    {
        return $this->belongsTo(JSAPotentialHazard::class, 'jsa_potential_hazard_uuid');
    }

    public function jsa_impact()
    {
        return $this->belongsTo(JSAImpact::class, 'jsa_impact_uuid');
    }
}
