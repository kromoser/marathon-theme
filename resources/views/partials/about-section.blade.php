<style media="screen">
  .about-section {
    background: linear-gradient(
      to right,
      rgba(0,0,0,0.2),
      rgba(0,0,0,0)
      ),
      url(@asset('images/kr-running.jpg'));
    padding: 1rem 0;

    background-size: cover;
    background-position: center center;
    margin: 0;
    background-repeat: no-repeat;

  }

  @media (max-width: 1024px ) {
    .about-section {
      background: linear-gradient(
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),
        url(@asset('images/kr-running.jpg'));
      background-position: right center;
      background-repeat: no-repeat;

    }

  }
</style>
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
