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
    'name' => array(
      'title' => 'Name'
    ),
    'image' => array(
        'title' => 'Image (1200x900)',
        'type' => 'image',
        'location' => public_path() . '/uploads/pages/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(1200, 900, 'crop', public_path() . '/uploads/pages/full/', 60),
            array(600, 450, 'crop', public_path() . '/uploads/pages/mobile/', 60)
        )
    ),
    'page' => array(
      'type' => 'relationship',
      'title' => 'Page',
      'name_field' => 'name'
    )
  )
);