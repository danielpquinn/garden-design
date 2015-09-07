<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageImage extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'page_images';

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
     * Get the page for this image
     */
    public function page() {
        return $this->belongsTo('App\Models\Page');
    }
}
