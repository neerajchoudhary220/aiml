<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;
    protected $fillable =['user_id','scope','mobile','otp','status','valid_upto'];

    protected $casts =[
        'valid_upto'=>'datetime'
    ];

    /**
     * Get the user that owns the Verification
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
