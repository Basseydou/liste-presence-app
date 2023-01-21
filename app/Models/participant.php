<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(){

        parent::boot();

        self::creating(function($participant){
            $participant->user()->associate(auth()->user()->id);

        });

        self::updating(function ($participant){
            $participant->user()->associate(request()->user);

        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
}
