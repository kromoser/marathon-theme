<div class="column is-4 workouts">
  <article @php post_class('workouts--workout') @endphp>
    <header class="post-header">
      @include('partials/entry-meta-single')
        <h2 class="entry-title ">
          {!! get_the_title() !!}
        </h2>
        <div class="workouts--content">{!! the_content() !!}</div></h3>
        <a class="strava-link" href="{!! get_post_meta(get_the_ID(),'strava-link',true) !!}"><img src="@asset('images/strava_logo_orange.svg')" alt="View on Strava">  </a>
    </header>
  </article>
</div>
