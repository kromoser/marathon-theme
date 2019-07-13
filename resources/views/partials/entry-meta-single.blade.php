<div class="post-meta">
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('m.d.y') }}</time>
  {!! App::firstCategory() !!}
  <span class="mileage">{!! get_post_meta(get_the_ID(), "total_workout_miles", true) ? " • ".get_post_meta(get_the_ID(), "total_workout_miles", true)." miles" : ""!!}</span>

</div>
{{--
HIDE AUTHOR
<p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>

--}}
