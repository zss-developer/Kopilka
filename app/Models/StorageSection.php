<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.08.2018
 * Time: 22:59
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StorageSection extends  Model
{
    protected $table = 'storage_sections';

    protected $fillable = ['code','name'];


}