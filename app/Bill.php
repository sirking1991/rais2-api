<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {

    protected $table = 'bills';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function customer() {
        return $this->belongsTo('App\Customer', 'code', 'customer_code');
    }

}
