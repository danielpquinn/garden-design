<?php

namespace App\Http\Controllers\API;

use App\Models\PressLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PressLinksController extends Controller {

  /*
   * List all press links
   */
  public function all() {
    $pressLinks = PressLink::all();

    return $pressLinks;
  }
}