{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

  @include('partials.hero-section')
  @include('partials.about-section')

  <div class="columns">
    <div class="column is-8">
      <!--<a href="https://www.crowdrise.com/donate/project/housing-works-nyc-2019/kevinromoser" id="crowdriseStaticLink-project-1807733" title="Housing Works NYC 2019 on CrowdRise">Housing Works NYC 2019 on CrowdRise</a><script type="text/javascript" src="https://cdn.crowdrise.com/widgets/donate/project/1807733/?utm_source=YOURSITE.COM&utm_campaign=widget"></script>-->
      <h2>Latest Posts</h2>
      @php($posts = HomeTemplate::getPosts())

      @while($posts->have_posts())
        @php($posts->the_post())
        @include('partials.content-single-'.get_post_type())
      @endwhile
      
    </div>

    <div class="column is-4">
      <h2>Workouts Loop</h2>
      @php($workouts = HomeTemplate::getWorkouts())

       @while($workouts->have_posts())
         @php($workouts->the_post())
         @include('partials.content-single-'.get_post_type())
       @endwhile
    </div>
  </div>






@endsection
