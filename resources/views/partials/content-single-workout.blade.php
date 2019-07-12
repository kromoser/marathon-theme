<article @php post_class('container column is-7 is-offset-1') @endphp>
  <header class="post-header">
    @include('partials/entry-meta-single')
    <h1 class="entry-title workout-title">{!! get_the_title() !!}</h1>
    <h3 class="single-excerpt">{!! get_the_excerpt() !!}</h3>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
    <p>@php echo get_post_meta(get_the_ID(), "total_workout_miles")[0]." total miles." @endphp</p>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

</article>
