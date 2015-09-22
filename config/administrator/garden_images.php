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
    'image',
    'thumbnail',
    'order'
  ),
  'actions' => array(
    'order_up' => array(
      'title' => 'Order Up',
      'messages' => array(
        'active' => 'Reordering...',
        'success' => 'Reordered',
        'error' => 'There was an error while reordering'
      ),
      'action' => function ($model) {
        return $model->orderUp();
      }
    ),
    'order_down' => array(
      'title' => 'Order Down',
      'messages' => array(
        'active' => 'Reordering...',
        'success' => 'Reordered',
        'error' => 'There was an error while reordering'
      ),
      'action' => function ($model) {
        return $model->orderDown();
      }
    )
  ),
  'sort' => array(
      'field' => 'order',
      'direction' => 'asc',
  ),
  'edit_fields' => array(
    'name' => array(
      'title' => 'Name'
    ),
    'image' => array(
        'title' => 'Image (1920x1100)',
        'type' => 'image',
        'location' => public_path() . '/uploads/gardens/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(1920, 1100, 'crop', public_path() . '/uploads/gardens/full/', 100),
            array(600, 450, 'crop', public_path() . '/uploads/gardens/mobile/', 100)
        )
    ),
    'thumbnail' => array(
        'title' => 'Thumbnail (300x300)',
        'type' => 'image',
        'location' => public_path() . '/uploads/gardens/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(300, 300, 'crop', public_path() . '/uploads/gardens/thumbnail/', 100)
        )
    ),
    'garden' => array(
      'type' => 'relationship',
      'title' => 'Garden',
      'name_field' => 'name'
    )
  )
);