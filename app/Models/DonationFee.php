<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationFee extends Model
{
    use HasFactory;
    public $timestmaps=false;
    protected $fillable = [
        'donor_fee',
        'donor_tribute',
        'donor_honoree_name'
    ];
    
    // public function donor(){
    //     return $this->belongsTo(Donation::class,'', 'id');
    // }
}
