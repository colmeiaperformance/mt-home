<section class="agende-palestra">
  <div class="container py-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle green rounded-circle">
          <div class="d-block text-center px-2">
            <div id="contagem-1">
              <h4 id="numero-1">+600</h4>
            </div>
            <p>estudos científicos</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle red rounded-circle">
          <div class="d-block text-center px-2">
            <div id="contagem-2">
              <h4 id="numero-2">+10</h4>
            </div>
            <p>milhões de meditantes</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle blue rounded-circle">
          <div class="d-block text-center px-2">
            <div id="contagem-3">
              <h4 id="numero-3">+100</h4>
            </div>
            <p>países</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle yellow rounded-circle">
          <div class="d-block text-center px-2">
            <div id="contagem-4">
              <h4 id="numero-4">+500</h4>
            </div>
            <p>mil meditantes no Brasil</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center justify-content-center py-5">
      <div class="col text-center">
        <a class="btn" href="https://meditacaotranscendental.com.br/mt-onde-voce-esta-2022/" role="button">Agende a palestra gratuita</a>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script>

      // jQuery('#contagem-1').on('mouseover', function() {
      //   var numero = document.getElementById('numero-1');
      //   var min = 1;
      //   var max = 600;
      //   var duração = max*15; 

      //   for (var i = min; i <= max; i++) {
      //     setTimeout(function(nr) {
      //       numero.innerHTML = '+'+nr;
      //     }, i * (max*15) / max, i);
      //   }
      // });

      // jQuery('#contagem-2').on('mouseover', function() {
      //   var numero = document.getElementById('numero-2');
      //   var min = 1;
      //   var max = 10;
      //   var duração = max*150;

      //   for (var i = min; i <= max; i++) {
      //     setTimeout(function(nr) {
      //       numero.innerHTML = '+'+nr;
      //     }, i * (max*150) / max, i);
      //   }
      // });

      // jQuery('#contagem-3').on('mouseover', function() {
      //   var numero = document.getElementById('numero-3');
      //   var min = 1;
      //   var max = 100;
      //   var duração = max*30;

      //   for (var i = min; i <= max; i++) {
      //     setTimeout(function(nr) {
      //       numero.innerHTML = '+'+nr;
      //     }, i * (max*30) / max, i);
      //   }
      // });
        
      // jQuery('#contagem-4').show(function() {
      //   var numero = document.getElementById('numero-4');
      //   var min = 1;
      //   var max = 500;
      //   var duração = max*1
      //   for (var i = min; i <= max; i++) {
      //     setTimeout(function(nr) {
      //       numero.innerHTML = '+'+nr;
      //     }, i * (max*15) / max, i);
      //   }
      // });


      // jQuery(document).ready(checkContainer);

      // function checkContainer () {
      //   if($('.agende-palestra').is(':visible')){ //if the container is visible on the page
      //     createGrid();  //Adds a grid to the html
      //   } else {
      //     setTimeout(checkContainer, 50); //wait 50 ms, then try again
      //   }
      // }
      $myDiv = $(".agende-palestra");

      $myDiv.hide();


      // $('.agende-palestra').one('ready', function(){
      //     alert('OLÁ');
      // });



      $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() > $(document).height() - 70) {
          $myDiv.show(function() { 
              var numero = document.getElementById('numero-1');
              var min = 1;
              var max = 600;
              // var duração = max*1
              for (var i = min; i <= max; i++) {
                setTimeout(function(nr) {
                  numero.innerHTML = '+'+nr;
                }, i * (max*15) / max, i);
              }
          });
          $myDiv.show(function() { 
              var numero = document.getElementById('numero-2');
              var min = 1;
              var max = 10;
              // var duração = max*1
              for (var i = min; i <= max; i++) {
                setTimeout(function(nr) {
                  numero.innerHTML = '+'+nr;
                }, i * (max*400) / max, i);
              }
          });
          $myDiv.show(function() { 
              var numero = document.getElementById('numero-3');
              var min = 1;
              var max = 100;
              // var duração = max*1
              for (var i = min; i <= max; i++) {
                setTimeout(function(nr) {
                  numero.innerHTML = '+'+nr;
                }, i * (max*100) / max, i);
              }
          });
          $myDiv.show(function() { 
              var numero = document.getElementById('numero-4');
              var min = 1;
              var max = 500;
              // var duração = max*1
              for (var i = min; i <= max; i++) {
                setTimeout(function(nr) {
                  numero.innerHTML = '+'+nr;
                }, i * (max*20) / max, i);
              }
          });
        }
      });


    </script>

  </div>
</section>