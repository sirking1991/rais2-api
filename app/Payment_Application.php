<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Application extends Model {

    protected $table = 'payment_applicatons';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function payment() {
        return $this->belongsTo('App\Payment', 'nmbr', 'nmbr');
    }

}
