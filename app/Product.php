<?php
/**
 * Created by PhpStorm.
 * User: stagiaire_dev_mob
 * Date: 7/14/20
 * Time: 1:10 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}