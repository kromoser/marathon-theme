<?php
/**
  * Custom post type for Workouts.
  *
  * @package marathon
  */

class Workout {
  function create_post_type() {
    $args = array(
      'labels'  => array(
          'name'  => 'Workouts',
          'singular_name' => 'Workout'
      ),
      'description' => 'To track a particular workout',
      'public'  => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'rewrite' => array('slug' => 'workouts'),
      'has_archive' => true,
      'hierarchical'  => true,
      'show_in_rest'  => true,
      'supports'  => [
          'title',
          'editor',
          'author',
          'thumbnail',
          'excerpt',
          'custom-fields',
          'revisions',

        ],
      'taxonomies' => [
          'post_tag',
          'category'
        ]
    );
    register_post_type('workout', $args);
  }
}
