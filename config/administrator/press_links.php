<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Press Links',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'press link',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\PressLink',

  'columns' => array(
    'name',
    'logo',
    'link'
  ), 

  'edit_fields' => array(
    'name' => array(
      'title' => 'Name'
    ),
    'link' => array(
      'title' => 'Link'
    ),
    'logo' => array(
        'title' => 'Logo (300x300)',
        'type' => 'image',
        'location' => public_path() . '/uploads/press_links/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(300, 300, 'crop', public_path() . '/uploads/press_links/thumbnail/', 100)
        )
    )
  )
);