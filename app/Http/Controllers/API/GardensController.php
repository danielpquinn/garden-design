<?php

namespace App\Http\Controllers\API;

use App\Models\Garden;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GardensController extends Controller {

  /*
   * List all gardens
   */
  public function all() {
    $gardens = Garden::orderBy('order')->get();

    return $gardens;
  }

  /*
   * Find a garden by it's slug
   */
  public function find(Request $request, $slug) {
    $garden = Garden::where('slug', $slug)->firstOrFail();

    $garden['next'] = Garden::where('order', $garden->order + 1)->first();
    $garden['images'] = $garden->images()->orderBy('order')->get();

    return $garden;
  }
}