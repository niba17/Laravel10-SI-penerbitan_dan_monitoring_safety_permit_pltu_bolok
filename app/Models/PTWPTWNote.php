<?php

namespace App\Models;

use App\Models\PTW;
use App\Models\PTWNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWPTWNote extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'ptw_ptw_note';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw()
    {
        return $this->belongsTo(PTW::class, 'ptw_uuid');
    }

    public function ptw_note()
    {
        return $this->belongsTo(PTWNote::class, 'ptw_note_uuid');
    }
}
