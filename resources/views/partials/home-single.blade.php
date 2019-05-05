<article @php post_class('home-posts--post') @endphp>
  <header>
    @include('partials/home-entry-meta')
    <h2 class="entry-title"><a href="{!! get_the_permalink() !!}">{!! get_the_title() !!}</a></h2>

  </header>
  <div class="entry-content">
    @php the_excerpt() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
