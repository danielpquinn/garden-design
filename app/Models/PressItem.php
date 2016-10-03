<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class PressItem extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'press_items';

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
     * Re-order press items
     */
    
    public function orderUp() {
        $currentIndex = 0;

        // Find all other press items

        $pressItems = PressItem::orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $pressItems->count(); ++$i) {
            if ($pressItems[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == 0) {
            return true;
        }

        // Swap the order of $this garden and whichever came right before it

        $pressItems[$currentIndex]->order -= 1;
        $pressItems[$currentIndex - 1]->order += 1;

        // Sort press items

        $pressItems = new Collection($pressItems->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $pressItems->each(function ($pressItem, $i) {
            $pressItem->order = $i;
            $pressItem->save();
        });

        return true;
    }

    /**
     * Re-order press items
     */
    
    public function orderDown() {
        $currentIndex = 0;

        // Find all other press items

        $pressItems = PressItem::orderBy('order')->get();

        // Find current $index

        for ($i = 0; $i < $pressItems->count(); ++$i) {
            if ($pressItems[$i]->id == $this->id) {
                $currentIndex = $i;
            }
        }

        if ($currentIndex == $pressItems->count() - 1) {
            return true;
        }

        // Swap the order of $this image and whichever came right after it

        $pressItems[$currentIndex]->order += 1;
        $pressItems[$currentIndex + 1]->order -= 1;

        // Sort press items

        $pressItems = new Collection($pressItems->sortBy('order')->values()->all());

        // Make the order property for models 0...x

        $pressItems->each(function ($pressItem, $i) {
            $pressItem->order = $i;
            $pressItem->save();
        });

        return true;
    }
}
