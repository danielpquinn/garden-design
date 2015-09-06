<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GardenImage extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'garden_images';

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
     * Get the garden for this image
     */
    public function garden() {
        return $this->belongsTo('App\Models\Garden');
    }
}
