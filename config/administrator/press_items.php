<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Press',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'press item',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\PressItem',

  'columns' => array(
    'name',
    'image',
    'file'
  ),

  'edit_fields' => array(
    'name',
    'image' => array(
        'title' => 'Image',
        'type' => 'image',
        'location' => public_path() . '/uploads/press_items/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(300, 300, 'crop', public_path() . '/uploads/press_items/thumbnail/', 100)
        )
    ),
    'file' => array(
      'title' => 'File',
      'type' => 'file',
      'location' => public_path() . '/uploads/press_items/',
      'naming' => 'keep',
      'length' => 20,
      'size_limit' => 5,
      'mimes' => 'pdf,psd,doc',
    )
  )
);