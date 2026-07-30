<?php
return array(
    'title'       => __( 'Case Study Challenge', 'hello-elementor-child' ),
    'categories'  => array( 'fulcrum-case-studies' ),
    'description' => __( 'Challenge section with reusable case study classes.', 'hello-elementor-child' ),
    'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","className":"cs-section cs-challenge-grid","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group cs-section cs-challenge-grid">
    <!-- wp:paragraph {"className":"cs-section-label"} -->
    <p class="cs-section-label">The Challenge</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":2} -->
    <h2>A System of Record Trapped Behind a Legacy Pipeline</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>The client's warranty management platform served as the authoritative system of record — but the way data flowed out of it was a bottleneck that silently constrained every analytics and reporting initiative downstream.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"cs-challenge-stack"} -->
            <div class="wp-block-group cs-challenge-stack">
                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>Data extractions relied on a legacy batch process, introducing 8–24 hours of latency between when data was generated and when it became available for reporting.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>Reporting workloads placed indirect pressure on live operational systems, creating reliability risk for a mission-critical platform.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>There was no governed, scalable ingestion path into the organization's modern Azure / Microsoft Fabric analytics stack.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"cs-challenge-stack"} -->
            <div class="wp-block-group cs-challenge-stack">
                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>Failed loads required manual intervention to reprocess — there was no automated replay capability.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>Data validation was limited, leaving confidence gaps in the integrity of analytics and dashboards.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-challenge-card"} -->
                <div class="wp-block-group cs-challenge-card">
                    <!-- wp:paragraph -->
                    <p>Advanced use cases — BI dashboards, AI workloads, fraud detection, vendor performance analytics — were simply not possible on this foundation.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->
HTML
);