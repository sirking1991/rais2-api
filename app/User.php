<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = ['email', 'first_name', 'last_name'];

    protected $attributes = [
        'status' => 'active',
    ];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
