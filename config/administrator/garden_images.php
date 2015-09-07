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
    'image'
  ),

  'edit_fields' => array(
    'name',
    'description',
    'image' => array(
        'title' => 'Image',
        'type' => 'image',
        'location' => public_path() . '/uploads/gardens/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(200, 200, 'crop', public_path() . '/uploads/gardens/thumbnails/', 100)
        )
    ),
    'garden' => array(
      'type' => 'relationship',
      'title' => 'Garden',
      'name_field' => 'name'
    )
  )
);