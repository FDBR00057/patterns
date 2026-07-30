<?php
return array(
	'title'       => __( 'Case Study Metrics Table', 'your-textdomain' ),
	'categories'  => array( 'fulcrum-case-studies' ),
	'description' => __( 'Before and after comparison table with reusable case study classes.', 'your-textdomain' ),
	'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","className":"cs-section cs-metrics-table","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group cs-section cs-metrics-table">
	<!-- wp:paragraph {"className":"cs-section-label"} -->
	<p class="cs-section-label">Before &amp; After</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2} -->
	<h2>The Transformation, by the Numbers</h2>
	<!-- /wp:heading -->

	<!-- wp:table {"hasFixedLayout":true} -->
	<figure class="wp-block-table">
		<table class="has-fixed-layout">
			<thead>
				<tr>
					<th>Area</th>
					<th>Before</th>
					<th>After</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Data ingestion method</td>
					<td>Custom batch DB extract</td>
					<td>Automated, partition-based ingestion</td>
				</tr>
				<tr>
					<td>Data availability latency</td>
					<td>8–24 hours</td>
					<td>&lt; 10 minutes from daily export</td>
				</tr>
				<tr>
					<td>Legacy process dependency</td>
					<td>High — entire stack dependent on it</td>
					<td>Fully eliminated</td>
				</tr>
				<tr>
					<td>Failed load recovery</td>
					<td>Manual, complex, error-prone</td>
					<td>Automated replay capability</td>
				</tr>
				<tr>
					<td>Data validation confidence</td>
					<td>Limited</td>
					<td>Schema &amp; row-level validation</td>
				</tr>
				<tr>
					<td>Analytics / AI readiness</td>
					<td>Not ready</td>
					<td>Fabric Bronze foundation created</td>
				</tr>
				<tr>
					<td>Operational risk</td>
					<td>High — fragile, unmonitored</td>
					<td>Resilient, monitored pipelines</td>
				</tr>
			</tbody>
		</table>
	</figure>
	<!-- /wp:table -->
</section>
<!-- /wp:group -->
HTML
);