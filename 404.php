<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="error cover-container d-flex mx-auto flex-column align-items-center justify-content-center">
	<div class="container">
		<div class="text-white d-flex mx-auto flex-column align-items-center justify-content-center">
			<div class="d-flex flex-column flex-md-row px-4 align-items-center justify-content-center">
				<h1 class="text-center align-items-center justify-content-center w-sm-100">
					Ops!      
				</h1>
				<div class="error-text d-flex flex-column justify-content-center px-4 w-sm-100">
					<h2>404</h2>
					<p>A página que você tentou acessar não pode ser encontrada.</p>
				</div>
			</div>
			<a href="<?php echo home_url(); ?>" class="btn border-white rounded-0 mb-0 mb-lg-5"><i class="bi bi-arrow-left-short"></i> Voltar</a>
		</div>
	</div>
</main>
<?php wp_footer(); ?>