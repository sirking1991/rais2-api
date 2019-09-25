<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorsement extends Model {

    protected $table = 'endorsements';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function policy() {
        return $this->belongsTo('App\Policy', 'nmbr', 'policy_nmbr');
    }

}
