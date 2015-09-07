<?php


return array(
  /**
   * Model title
   *
   * @type string
   */
  'title' => 'Pages',

  /**
   * The singular name of your model
   *
   * @type string
   */
  'single' => 'page',

  /**
   * The class name of the Eloquent model that this config represents
   *
   * @type string
   */
  'model' => 'App\Models\Page',

  'columns' => array(
    'name',
    'content'
  ),

  'edit_fields' => array(
    'name',
    'content' => array(
      'type' => 'wysiwyg'
    )
  )
);