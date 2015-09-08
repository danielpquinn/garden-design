<?php

namespace App\Http\Controllers\API;

use App\Models\PressItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PressItemsController extends Controller {

  /*
   * List all press items
   */
  public function all() {
    $pressItems = PressItem::all();

    return $pressItems;
  }
}