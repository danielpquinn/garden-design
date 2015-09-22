<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
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
     * Get the page for $this image
     */
    public function page() {
        return $this->belongsTo('App\Models\Page');
    }

    /**
     * Re-order items within associated page
     */
    
    public function orderUp() {
        $currentIndex = 0;

        // Find all other images belonging to the same page

        $page = $this->page;

        $images = PageImage::where('page_id', $page->id)->orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $images->count(); ++$i) {
            if ($images[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == 0) {
            return true;
        }

        // Swap the order of $this image and whichever came right before it

        $images[$currentIndex]->order -= 1;
        $images[$currentIndex - 1]->order += 1;

        // Sort images

        $images = new Collection($images->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $images->each(function ($image, $i) {
            $image->order = $i;
            $image->save();
        });

        return true;
    }

    /**
     * Re-order items within associated page
     */
    
    public function orderDown() {
        $currentIndex = 0;

        // Find all other images belonging to the same page

        $page = $this->page;

        $images = PageImage::where('page_id', $page->id)->orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $images->count(); ++$i) {
            if ($images[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == $images->count() - 1) {
            return true;
        }

        // Swap the order of $this image and whichever came right after it

        $images[$currentIndex]->order += 1;
        $images[$currentIndex + 1]->order -= 1;

        // Sort images

        $images = new Collection($images->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $images->each(function ($image, $i) {
            $image->order = $i;
            $image->save();
        });

        return true;
    }
}
