<?php
return array(
	'title'       => __( 'Case Study Solution', 'hello-elementor-child' ),
	'categories'  => array( 'fulcrum-case-studies' ),
	'description' => __( 'Solution section with reusable case study classes.', 'hello-elementor-child' ),
	'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","className":"cs-section cs-solution-grid","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group cs-section cs-solution-grid">
	<!-- wp:paragraph {"className":"cs-section-label"} -->
	<p class="cs-section-label">The Solution</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2} -->
	<h2>A Governed Lakehouse Ingestion Framework, Built for Scale</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Fulcrum designed and implemented a modern data ingestion framework connecting the client's Kafka-based warranty data exports to Microsoft Fabric — replacing the legacy extraction process entirely with a structured, automated, partition-aware pipeline.</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"cs-solution-list","layout":{"type":"default"}} -->
	<div class="wp-block-group cs-solution-list">
		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">⚡</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Partition-Aware Incremental Ingestion</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Historical and daily delta data processed automatically — only new data ingested each run, eliminating redundant reloads and reducing system pressure.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">🏛️</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Governed Bronze Layer</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>A single, trusted entry point for warranty data into the analytics environment — structured for Silver/Gold transformation and ready for BI, AI, and data science workloads.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">🔍</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Built-In Validation &amp; Monitoring</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Schema and row-level validation, error handling, automated alerts, and parallel verification against the legacy process during transition for full confidence.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">📘</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Operational Readiness &amp; Handover</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Comprehensive data mapping, runbooks, and documentation delivered to ensure the client's team could own, extend, and maintain the system independently.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">♻️</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Automated Reprocessing</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Failed loads can now be replayed automatically — no manual intervention, no data gaps, no scrambling to recover from pipeline failures.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cs-solution-card"} -->
		<div class="wp-block-group cs-solution-card">
			<!-- wp:paragraph {"className":"cs-icon"} -->
			<p class="cs-icon">📐</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3>Designed to Scale</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Architecture supports onboarding additional tables and topics with minimal effort — built as a platform, not a one-off integration.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
HTML
);