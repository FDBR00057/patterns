<?php
return array(
	'title'       => __( 'Case Study FAQ', 'your-textdomain' ),
	'categories'  => array( 'fulcrum-case-studies' ),
	'description' => __( 'FAQ section for the bottom of a case study template.', 'your-textdomain' ),
	'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","className":"cs-section cs-faq-section","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group cs-section cs-faq-section">
	<!-- wp:paragraph {"className":"cs-section-label"} -->
	<p class="cs-section-label">FAQ</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2} -->
	<h2>Common Questions</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Answers to the most common questions about the engagement, implementation approach, and business impact.</p>
	<!-- /wp:paragraph -->

	<!-- wp:details {"className":"cs-faq-item"} -->
	<details class="wp-block-details cs-faq-item">
		<summary>What problem was the client trying to solve?</summary>
		<!-- wp:paragraph -->
		<p>The client needed to replace fragile legacy processes, reduce latency, and create a more reliable data foundation for reporting, analytics, and future AI use cases.</p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details {"className":"cs-faq-item"} -->
	<details class="wp-block-details cs-faq-item">
		<summary>What changed in the new solution?</summary>
		<!-- wp:paragraph -->
		<p>The new solution introduced automated ingestion, stronger validation, replay capability for failed loads, and a more resilient pipeline architecture.</p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:paragraph -->

	<!-- wp:details {"className":"cs-faq-item"} -->
	<details class="wp-block-details cs-faq-item">
		<summary>How quickly did data become available after implementation?</summary>
		<!-- wp:paragraph -->
		<p>Data availability improved from long batch windows to a much faster operational cadence, enabling downstream teams to work with fresher information.</p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details {"className":"cs-faq-item"} -->
	<details class="wp-block-details cs-faq-item">
		<summary>Why does this matter for analytics and AI readiness?</summary>
		<!-- wp:paragraph -->
		<p>Reliable ingestion, validation, and monitoring create the foundation needed for trustworthy dashboards, advanced analytics, and future AI workflows.</p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->
</section>
<!-- /wp:group -->
HTML
);