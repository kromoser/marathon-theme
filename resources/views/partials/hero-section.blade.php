<section class="hero-section container">
  <div class="columns">
    <div class="column is-8">
      <h1 class="hero-title">Miles to&nbsp;Go</h1>
      <p class="hero-subtitle">Running the 2019 NYC Marathon to raise money for Housing Works</p>
      <p class="stat-header">The Race</p>
      <h3 class="stat-highlight">26.2 <span class="stat-secondary">miles</span></h3>
      <p class="stat-header">The Goal</p>
      <h3 class="stat-highlight">$<span id="progress-total">100</span><span class="stat-secondary">/$2,500</span></h3>
      <p class="stat-header">The Training</p>
      <h3 class="stat-highlight"><span id="total-miles-logged">{!! HomeTemplate::sumMiles() !!}</span> <span class="stat-secondary">miles logged</span></h3>



    </div>

    <div class="column is-4">
      <div class="progress-line-container">
        @php($progress = 3250 - 1250)
        <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
            const progressPath = document.querySelector('.progress-line');
            const progressPathLength = progressPath.getTotalLength();
            const progressVal = parseInt(document.querySelector('#progress-total').textContent);
            console.log(progressPathLength)
            console.log({{$progress}})
          //  progressPath.style.strokeDasharray = (progressVal/2500)*progressPathLength;
          //  progressPath.style.strokeDashOffset = (progressVal/2500)*progressPathLength;
          })
        </script>
        <svg version="1.1" id="progress-line-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 597.3 2041.3" style="enable-background:new 0 0 597.3 2041.3;" xml:space="preserve">
  <style type="text/css">
    .progress-line-container, .progress-line-container svg {
      height: 95vh;
    }

    .progress-line{
      stroke-dasharray: 3250;
      stroke-dashoffset: 3250;
      animation: draw-line 2s linear forwards;
      fill:none;stroke:#FDC03B;
      stroke-width:6;
      stroke-linejoin:round;
      stroke-miterlimit:10;
    }

    @keyframes draw-line {
      from {
        stroke-dashoffset: 3250 ;
      }
      to {
        stroke-dashoffset: {{$progress}};
      }
    }
  </style>
  <path class="progress-line" d="M308.8,1992.9L428,1842.3V1783l-24.8-2.2l-32.3-147.4l44.9-271.6l12.2-127.7l-3.5-76.3l-14.8-9.6l126-96.8
  	l-61.5-74.5l-64.1-24.8l-11.8-28.3l-2.2-35.7l19.2-102.5l-43.6-34.4l14.4-11.3l-37.9-48l-14-48.8l-15.7,3.9l-9.8-37.9l9.4-7.4
  	l45.8-14.4v-31H207.9V111.6l19.2-35.7l-1.3-22.2l-17.9,1.7L206.1,34l-51-11.8l-13.1,11.3h-20.9V126h-13.5v26.6h14v228.9l-19.2,8.3
  	c0,0-1.7,22.7-3.5,27.9c-1.7,5.2-2.6,12.2,0,17s11.8,8.7,8.3,14.4c-3.5,5.7-8.7,14-4.4,19.2c4.4,5.2,10,15.3,7.8,24.8
  	c-2.2,9.6-15.1,25.7-13.4,27.5c1.7,1.7,18.7,16.6,18.7,16.6v17.9H55.3c0,0-1.7-15.7,3.9-33.1c5.7-17.4,7.8-26.2,7.8-27s0,0.9,0,0.9"
  	/>
  </svg>
      </div>
    </div>
  </div>
</section>
