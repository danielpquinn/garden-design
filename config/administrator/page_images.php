<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Page Images',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'page image',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\PageImage',

  'columns' => array(
    'name',
    'image'
  ),

  'edit_fields' => array(
    'name',
    'image' => array(
        'title' => 'Image',
        'type' => 'image',
        'location' => public_path() . '/uploads/pages/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5
    ),
    'page' => array(
      'type' => 'relationship',
      'title' => 'Page',
      'name_field' => 'name'
    )
  )
);