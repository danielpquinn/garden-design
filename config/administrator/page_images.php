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
    'image',
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
        'location' => public_path() . '/uploads/pages/original/',
        'naming' => 'keep',
        'length' => 60,
        'size_limit' => 5,
        'sizes' => array(
            array(1920, 1100, 'crop', public_path() . '/uploads/pages/full/', 100),
            array(600, 450, 'crop', public_path() . '/uploads/pages/mobile/', 100)
        )
    ),
    'page' => array(
      'type' => 'relationship',
      'title' => 'Page',
      'name_field' => 'name'
    )
  )
);