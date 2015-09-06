<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Gardens',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'garden',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\Garden',

  'columns' => array(
    'name',
    'slug',
    'description',
  ),

  'edit_fields' => array(
    'name',
    'slug',
    'description',
  )
);