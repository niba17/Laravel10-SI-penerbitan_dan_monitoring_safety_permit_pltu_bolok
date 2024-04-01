<?php

namespace App\Models;

use App\Models\PTWDescription;
use App\Models\PTWIsolationMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWDescriptionPTWIsolationMethod extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'ptw_description_ptw_isolation_method';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw_description()
    {
        return $this->belongsTo(PTWDescription::class, 'ptw_description_uuid');
    }

    public function ptw_isolation_method()
    {
        return $this->belongsTo(PTWIsolationMethod::class, 'ptw_isolation_method_uuid');
    }
}
