<?php snippet('header') ?>
	
<section class="l-grid mx-auto my4 work">
	<ul class="projects all l-grid__item--8-col list-reset">
		<h1 class="heading-4 caps semibold grey-light">Work, work, work —</h1>
		<?php foreach(page('work')->children()->visible() as $project): ?>
		<li class="animation-slide-up <?php echo $project->uid() ?> my3">
			<h2 class="heading-3 semibold black">
				<a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
			</h2>
			<p class="grey"><?php echo $project->summary() ?></p>
		</li>
		<?php endforeach ?>
	</ul>
</section>

<?php snippet('footer') ?>