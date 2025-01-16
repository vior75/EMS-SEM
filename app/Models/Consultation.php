<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    // Define the table name if it's not the default 'consultations'
    protected $table = 'consultation';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'tujuan_aduan',
        'keterangan_aduan',
        'tarikh_konsultasi',
        'paid_pilihan',
        'kounselor_pilihan',
    ];

    /**
     * Define the relationship to the User model.
     * A consultation belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
