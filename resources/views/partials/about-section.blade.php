<section class="about-section">
  <div class="container section">
    <div class="columns">
      <div class="column is-8-tablet is-12-mobile">
        <h2>Why Run?</h2>
        {{-- Load page content --}}
        @php(wp_reset_query())
        @while ( have_posts() )
          @php(the_post())
          @php(the_content())
        @endwhile

      </div>
    </div>
  </div>
</section>
