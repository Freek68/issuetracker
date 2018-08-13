<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: 8/7/18
 * Time: 9:49 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Issue extends Model
{
    public $fillable = [
        'user_id',
        'customer_id',
        'title',
        'description',
        'start_at',
        'due_at',
        'type',
        'status',
        'priority',
        'progress',
        'estimate',
    ];

    public $dates = [
        'created_at',
        'updated_at',
        'start_at',
        'due_at',
    ];

    public function user(){
        return $this->belongsTo('App\User::class');
    }


}