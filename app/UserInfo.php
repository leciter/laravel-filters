<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // If in table timestamps absents, then $timestamps = false is necessary
    public $timestamps = false; // created_at & updated_at = null (if timestamps present)
    protected $table = 'user_info';

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
