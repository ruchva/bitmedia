<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;

    public function commercial()
    {
        return $this->belongsTo(Commercial::class);
    }

    public function similar()
    {
        return $this->where('client_id', $this->client_id)
            ->with('commercial')
            ->take(2)
            ->get();
    }
}
