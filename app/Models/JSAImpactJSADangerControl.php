<?php

namespace App\Models;

use App\Models\JSAImpact;
use App\Models\JSADangerControl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAImpactJSADangerControl extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_impact_jsa_danger_control';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_impact()
    {
        return $this->belongsTo(JSAImpact::class, 'jsa_impact_uuid');
    }

    public function jsa_danger_control()
    {
        return $this->belongsTo(JSADangerControl::class, 'jsa_danger_control_uuid');
    }
}
