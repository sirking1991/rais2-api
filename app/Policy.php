<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model {

    protected $table = 'policies';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function customer() {
        return $this->belongsTo('App\Customer', 'code', 'customer_code');
    }

    public function endorsements() {
        return $this->hasMany('App\Endorsement' ,'policy_nmbr', 'nmbr');
    }

    public function claims() {
        return $this->hasMany('App\Claim' ,'policy_nmbr', 'nmbr');
    }
}
