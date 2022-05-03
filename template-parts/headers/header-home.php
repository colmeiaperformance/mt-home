<header class="header header--home">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row row-cols-1 row-cols-lg-2 align-items-center justify-content-center">
            <div class="col carousel-caption p-0 position-relative text-left text-lg-start start-0 end-0">
              <h1 id="title">
               <strong>A mudança começa dentro.</strong><br />
                20 minutos.<br />
                2 vezes ao dia.<br />
              </h1>
                <div id="variable-texts">
                  <p class="line typing-animation"> 
                    Sem concentração
                  </p>
                  <p class="line typing-animation-2"> 
                    Sem esvaziar a mente
                  </p>
                  <p class="line typing-animation-3"> 
                    Sem esforço 
                  </p>
                </div>
            </div>
            <div class="col p-0 text-center text-lg-end position-relative">
              <img src=<?php echo get_template_directory_uri() . '/images/header/banner-home.png' ?> alt="Header">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
		setInterval(function () {
			document.getElementById('variable-texts').style.display = "none";
      document.getElementById('variable-texts').classList.add('ajust-1');
      document.getElementById('title').classList.add('ajust');
			setTimeout(function () {
				document.getElementById('variable-texts').style.display = "inline-block";
			}, 14);
		}, 14000);
	</script>
</header>