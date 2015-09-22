<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
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

    /**
     * Re-order items within associated page
     */
    
    public function orderUp() {
        $currentIndex = 0;

        // Find all other gardens

        $gardens = Garden::orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $gardens->count(); ++$i) {
            if ($gardens[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == 0) {
            return true;
        }

        // Swap the order of $this garden and whichever came right before it

        $gardens[$currentIndex]->order -= 1;
        $gardens[$currentIndex - 1]->order += 1;

        // Sort gardens

        $gardens = new Collection($gardens->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $gardens->each(function ($garden, $i) {
            $garden->order = $i;
            $garden->save();
        });

        return true;
    }

    /**
     * Re-order items within associated page
     */
    
    public function orderDown() {
        $currentIndex = 0;

        // Find all other gardens

        $gardens = Garden::orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $gardens->count(); ++$i) {
            if ($gardens[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == $gardens->count() - 1) {
            return true;
        }

        // Swap the order of $this image and whichever came right after it

        $gardens[$currentIndex]->order += 1;
        $gardens[$currentIndex + 1]->order -= 1;

        // Sort gardens

        $gardens = new Collection($gardens->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $gardens->each(function ($image, $i) {
            $image->order = $i;
            $image->save();
        });

        return true;
    }
}
