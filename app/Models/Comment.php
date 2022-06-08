<?php

namespace App\Models;
use App\Models\User;
use App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
