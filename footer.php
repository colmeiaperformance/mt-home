<footer>
  <div class="container text-center text-lg-start text-black">
    <div class="row align-items-center align-items-lg-end justify-content-center">
      <div class="col-12 col-lg-2 menu mb-4 mb-lg-0 d-none d-lg-block pb-2">
       <div class="row">
          <div class="col p-0">
          
        </div>
        <div class="col p-0">
         
        </div>
       </div>
      </div>

      <div class="col-12 col-lg-8 social p-lg-0">
        <div class="logo text-center">
          <a href="<?php home_url(); ?>">
            <img src=<?php echo get_template_directory_uri() . '/images/footer/logo-footer.png' ?> alt="Logotipo">  
          </a>
          <div class="copyright d-none d-lg-block">
            <p>© 2022 Meditação Transcendental. Todos os direitos reservados.</p>
            <p>Meditação Transcendental, MT ® são marcas registradas protegidas e usadas apenas sob licença ou permissão.</p>
          </div>
          
        </div>
     </div>

      <div class="col-12 col-lg-2 redes p-lg-0"> 
          <div>
            <p>Quer ver mais?</p>
            <p><strong>Nos siga nas redes sociais!</strong></p>
          </div>
        <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start">
          <li>
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/meditacaotranscendentaloficial/">
              <img src=<?php echo get_template_directory_uri() . '/images/footer/icon-facebook.png' ?> alt="Facebook">  
            </a>
          </li>
          <li>
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/meditacaotranscendentaloficial/">
              <img src=<?php echo get_template_directory_uri() . '/images/footer/icon-instagram.png' ?> alt="Instagram">  
            </a>
          </li>
        </ul>
        <div class="copyright d-block d-lg-none">
            <p>© 2022 Meditação Transcendental. Todos os direitos reservados.</p>
            <p>Meditação Transcendental, MT ® são marcas registradas protegidas e usadas apenas sob licença ou permissão.</p>
        </div>
        <div class="colmeia d-flex align-items-center justify-content-center justify-content-lg-start">
          <p>Criado por</p> <a href="https://colmeiaperformance.com.br/"><img src=<?php echo get_template_directory_uri() . '/images/footer/logo-colmeia.png' ?> alt="Colmeia"></a>
        </div>
      </div>

      <p class="float-end top">
        <a href="#">
          <i class="bi bi-arrow-up-circle-fill"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="js/main.js"></script>
</body>
</html>