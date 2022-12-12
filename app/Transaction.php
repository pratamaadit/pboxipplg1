<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
        protected $fillable = ['user_id'];

        public function user()
        {
            return $this->belongsTo('App\User');
        }

        public function detail()
        {
            return $this->hasMany('App\TransactionDetail');
        }
}
