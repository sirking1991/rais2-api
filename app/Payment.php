<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

    protected $table = 'payments';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function customer() {
        return $this->belongsTo('App\Customer', 'code', 'customer_code');
    }

    public function payment_application() {
        return $this->hasMany('App\Payment_Application' ,'nmbr', 'nmbr');
    }
}
