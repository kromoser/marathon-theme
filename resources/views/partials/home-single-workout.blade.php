<a href="{!! get_the_permalink() !!}" class="home-posts--workout-link">
  <article @php post_class('home-posts--workout') @endphp>
    <header>
      @include('partials/home-entry-meta')
      <h2 class="entry-title">{!! get_the_title() !!}</h2>

    </header>
    <div class="entry-content">
      @php the_excerpt() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
  </article>
</a>
