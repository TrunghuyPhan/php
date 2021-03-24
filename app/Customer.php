<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
<<<<<<< HEAD
    	'customer_name', 'customer_email', 'customer_password','customer_phone','customer_vip','customer_picture'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customers';

 	
=======
        'customer_name', 'customer_email', 'customer_password', 'customer_phone', 'customer_vip', 'customer_picture'
    ];
    protected $primaryKey = 'customer_id';
    protected $table = 'tbl_customers';
>>>>>>> 58165bd217bae47a34ae09aca6c95e90509fccf3
}
