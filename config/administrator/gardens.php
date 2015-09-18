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
    'description'
  ),

  'edit_fields' => array(
    'name' => array(
      'title' => 'Name'
    ),
    'slug' => array(
      'title' => 'Slug (Appears in URL)'
    ),
    'description' => array(
      'title' => 'Description',
      'type' => 'textarea'
    ),
    'image' => array(
        'title' => 'Thumbnail (300x300)',
        'type' => 'image',
        'location' => public_path() . '/uploads/gardens/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(300, 300, 'crop', public_path() . '/uploads/gardens/thumbnail/', 100)
        )
    )
  )
);