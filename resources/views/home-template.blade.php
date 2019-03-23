{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

  @include('partials.hero-section')


  <h2>Workouts Loop</h2>
   @php($workouts = HomeTemplate::getWorkouts())

  @while($workouts->have_posts())
    @php($workouts->the_post())
    {{--<h3>
      <a href="{{ the_permalink() }}">
        {{ the_title() }}
      </a>
    </h3>--}}
    @include('partials.content-single-'.get_post_type())
  @endwhile

  <hr>

  {{--@foreach($workouts as $workout)
    <h1></h1>
  @endforeach--}}


@endsection
