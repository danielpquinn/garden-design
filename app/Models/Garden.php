<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garden extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gardens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the images for the garden
     */
    public function images() {
        return $this->hasMany('App\Models\GardenImage');
    }
}
