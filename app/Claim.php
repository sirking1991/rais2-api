<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model {

    protected $table = 'claims';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function policy() {
        return $this->belongsTo('App\Policy', 'nmbr', 'policy_nmbr');
    }

    public function customer() {
        return $this->belongsTo('App\Customer', 'nmbr', 'customer_nmbr');
    }

}
