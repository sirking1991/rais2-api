<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

    protected $table = 'notes';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
