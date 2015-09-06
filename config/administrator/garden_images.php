<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Garden Images',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'garden image',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\GardenImage',

  'columns' => array(
    'name',
    'description',
    'thumbnail',
    'full'
  ),

  'edit_fields' => array(
    'name',
    'description',
    'thumbnail',
    'full',
    'garden' => array(
      'type' => 'relationship',
      'title' => 'Garden',
      'name_field' => 'name'
    )
  )
);