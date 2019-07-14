<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class HomeTemplate extends Controller
{

  public static function getTotalDonations($id) {
    $total_donations = get_post_meta($id,'total_donations',TRUE);
    return $total_donations;
  }

  public static function getWorkouts($amount) {
    $args = [
      'post_type' => 'workout',
      'posts_per_page' => $amount
    ];
    $workouts = new WP_Query($args);

    return $workouts;
  }

  public static function sumMiles() {
    $all_workouts = self::getWorkouts(-1);
    //return $all_workouts;
    $total_miles = 0;
    while ( $all_workouts->have_posts() ) {
      $all_workouts->the_post();
      $total_miles += get_post_meta(get_the_ID(), "total_workout_miles", true);
    };
    $total_miles = round($total_miles);
    return $total_miles;
    //return '3';
    //return (string)$workouts;
  }

  public static function getPosts() {
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 10
    ];

    $posts = new WP_Query($args);

    return $posts;
  }



}
