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
    'image'
  ),

  'edit_fields' => array(
    'name',
    'image' => array(
        'title' => 'Image',
        'type' => 'image',
        'location' => public_path() . '/uploads/gardens/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(300, 300, 'crop', public_path() . '/uploads/gardens/thumbnail/', 60),
            array(1200, 900, 'crop', public_path() . '/uploads/gardens/full/', 60),
            array(600, 450, 'crop', public_path() . '/uploads/gardens/mobile/', 60)
        )
    ),
    'garden' => array(
      'type' => 'relationship',
      'title' => 'Garden',
      'name_field' => 'name'
    )
  )
);