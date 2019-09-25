<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $table = 'customers';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function policies() {
        return $this->hasMany('App\Policy' ,'customer_code', 'code');
    }

    public function bills() {
        return $this->hasMany('App\Bill' ,'customer_code', 'code');
    }

    public function payments() {
        return $this->hasMany('App\Payment' ,'customer_code', 'code');
    }

}
