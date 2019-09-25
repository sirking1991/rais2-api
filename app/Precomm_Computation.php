<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Precomm_Computation extends Model {

    protected $table = 'precomm_computations';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function policy() {
        return $this->belongsTo('App\Policy', 'nmbr', 'policy_nmbr');
    }

    public function endorsement() {
        return $this->belongsTo('App\Endorsement', 'nmbr', 'endorsement_nmbr');
    }
}
