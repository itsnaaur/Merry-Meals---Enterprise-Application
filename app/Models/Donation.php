<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public $timestmaps=false;
    protected $fillable = [
        'donor_id',
        'donor_email',
        'donor_first_name',
        'donor_last_name',
        'donor_phone',
        'donor_address',
        'donor_city',
        'donor_state',
        'donor_country',
    ];
    
    public function donor(){
        return $this->belongsTo(DonationFee::class,'donor_id', 'id');
    }
}
