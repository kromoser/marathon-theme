<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class HomeTemplate extends Controller
{
  public static function getWorkouts() {
    $args = [
      'post_type' => 'workout',
      'posts_per_page' => '-1'
    ];

    $workouts = new WP_Query($args);



    return $workouts;
  }
}
