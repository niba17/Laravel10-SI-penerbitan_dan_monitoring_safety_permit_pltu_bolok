<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\JSAWorkTool;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAJSAWorkTool extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_jsa_work_tool';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->belongsTo(JSA::class, 'jsa_uuid');
    }

    public function jsa_work_tool()
    {
        return $this->belongsTo(JSAWorkTool::class, 'jsa_work_tool_uuid');
    }
}
