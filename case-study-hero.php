<?php
return array(
	'title'       => __( 'Case Study Hero', 'your-textdomain' ),
	'categories'  => array( 'fulcrum-case-studies' ),
	'description' => __( 'Hero section for case studies with headline, project metadata, and outcome strip.', 'your-textdomain' ),
	'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","className":"cs-hero","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group alignfull cs-hero">
	<!-- wp:paragraph {"className":"cs-eyebrow"} -->
	<p class="cs-eyebrow">Case Study</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1>Modernizing claims validation with a faster, more resilient data foundation for <em>FD RYZE®</em></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"cs-outcome-strip","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group cs-outcome-strip">
		<!-- wp:group {"className":"cs-outcome-pill","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">&lt; 10 min</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Latency from daily export to usable data</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-hero-meta","layout":{"type":"constrained"}} -->
	<div class="wp-block-group cs-hero-meta">
		<!-- wp:columns {"className":"cs-hero-meta-grid"} -->
		<div class="wp-block-columns cs-hero-meta-grid">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"cs-hero-meta-item"} -->
				<p class="cs-hero-meta-item"><strong>Client:</strong> Leading equipment protection and insurance service provider</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"cs-hero-meta-item"} -->
				<p class="cs-hero-meta-item"><strong>Industry:</strong> Insurance</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"cs-hero-meta-item"} -->
				<p class="cs-hero-meta-item"><strong>Domain Area:</strong> Claims Validation</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"className":"cs-hero-meta-item"} -->
				<p class="cs-hero-meta-item"><strong>Platform:</strong> FD RYZE®</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

		<!-- wp:group {"className":"cs-outcome-pill","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">100%</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Legacy dependency removed from the ingestion path</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-outcome-pill","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">Automated</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Replay, validation, and monitoring capabilities added</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
HTML
);