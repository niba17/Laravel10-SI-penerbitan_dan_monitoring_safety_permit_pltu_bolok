<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JSAWorkStageJSAPIC;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSADangerControl extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_danger_controls';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_impact_jsa_danger_control()
    {
        return $this->hasMany(JSAWorkStageJSAPIC::class, 'jsa_danger_control_uuid', 'uuid');
    }
}
