<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $description;
    public $location;
    public $amount;
    public $name;
    public $email;
    public $password;

    // Illuminate\Database Vars
    protected $table = 'users';
    public $fillable = ['description', 'location', 'amount', 'name', 'email', 'password', 'unique_id'];
}
