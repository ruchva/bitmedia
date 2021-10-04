<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description,0,80) . "...";
    }

    public function getAvatarAttribute()
    {
        $email = md5($this->email);
        return "https://s.gravatar.com/avatar/$email";
    }

    public function commercials()
    {
        return $this->hasMany(Commercial::class);
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('client')
            ->take(2)
            ->get();
    }
}
