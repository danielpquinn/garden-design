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
    $gardens = Garden::all();

    return $gardens;
  }

  /*
   * List all gardens
   */
  public function find(Request $request, $slug) {
    $garden = Garden::where('slug', $slug)->firstOrFail();

    $garden['images'] = $garden->images;

    return $garden;
  }
}