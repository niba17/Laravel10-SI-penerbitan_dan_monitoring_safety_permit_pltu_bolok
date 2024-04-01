<?php

namespace App\Models;

use App\Models\JSAJSAWorkTool;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorkTool extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_work_tools';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_jsa_work_tool()
    {
        return $this->hasMany(JSAJSAWorkTool::class, 'jsa_work_tool_uuid', 'uuid');
    }
}
