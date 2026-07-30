<?php
return array(
	'title'       => __( 'Case Study Hero', 'hello-elementor-child' ),
	'categories'  => array( 'fulcrum-case-studies' ),
	'description' => __( 'Hero section with reusable case study classes.', 'hello-elementor-child' ),
	'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","className":"cs-hero","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group alignfull cs-hero">
	<!-- wp:paragraph {"className":"cs-eyebrow"} -->
	<p class="cs-eyebrow">Case Study · Insurance &amp; Warranty</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1>From Legacy Batch Exports to <em>Real-Time Analytics</em> — a Modern Data Foundation in Microsoft Fabric</h1>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"cs-outcome-strip","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group cs-outcome-strip">
		<!-- wp:group {"className":"cs-outcome-pill"} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">&lt; 10 min</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Data availability latency (was 8–24 hrs)</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-outcome-pill"} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">100%</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Legacy extraction dependency eliminated</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-outcome-pill"} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">Automated</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Replay &amp; reprocessing (was manual)</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-outcome-pill"} -->
		<div class="wp-block-group cs-outcome-pill">
			<!-- wp:paragraph {"className":"number"} -->
			<p class="number">AI-Ready</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Bronze Lakehouse foundation established</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
HTML
);