<?php

namespace App\Http\Controllers\API;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

  /*
   * Find page by name
   */
  public function find(Request $request, $name) {
    $page = Page::where('name', $name)->firstOrFail();

    $page['images'] = $page->images;

    return $page;
  }
}