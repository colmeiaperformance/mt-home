<section class="agende-palestra">
  <div class="container py-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle green rounded-circle">
          <div class="d-block text-center px-2">
            <h4>+<span class="counter">600</span></h4>
            <p>estudos científicos</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle red rounded-circle">
          <div class="d-block text-center px-2">
            <h4>+<span class="counter">10</span></h4>
            <p>milhões de meditantes</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle blue rounded-circle">
          <div class="d-block text-center px-2">
            <h4>+<span class="counter">100</span></h4>
            <p>países</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle yellow rounded-circle">
          <div class="d-block text-center px-2">
            <h4>+<span class="counter">500</span></h4>
            <p>mil meditantes no Brasil</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center justify-content-center py-5">
      <div class="col text-center">
        <a class="btn" href="#" role="button">Agende a palestra gratuita</a>
      </div>
    </div>

  </div>
</section>

<script>
jQuery(document).ready(function() {
  // jQuery(".counter").counterUp({
  //   delay: 10,
  //   time: 1200
  // });

  const counterUp = window.counterUp.default

  const callback = entries => {
    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        for (const counter of counters) {
          counterUp(counter, {
            duration: 1000,
            delay: 10,
          })
          el.classList.add('is-visible')
        }
      }
    })
  }

  // observer
  const IO = new IntersectionObserver(callback, {
    threshold: 1
  })

  // First element to target
  const el = document.querySelector('.counter')

  // all numbers
  const counters = document.querySelectorAll('.counter')
  IO.observe(el)
});
</script>