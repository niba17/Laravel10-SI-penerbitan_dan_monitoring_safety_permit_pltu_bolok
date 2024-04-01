<?php

namespace App\Models;

use App\Models\PTW;
use App\Models\PTWDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWPTWDescription extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'ptw_ptw_description';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw()
    {
        return $this->belongsTo(PTW::class, 'ptw_uuid');
    }

    public function ptw_description()
    {
        return $this->belongsTo(PTWDescription::class, 'ptw_description_uuid');
    }
}
