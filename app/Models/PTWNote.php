<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PTWPTWNote;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWNote extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'ptw_notes';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw_description_ptw_isolation_method()
    {
        return $this->hasMany(PTWPTWNote::class, 'ptw_note_uuid', 'uuid');
    }
}
