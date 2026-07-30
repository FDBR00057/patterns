<?php
return array(
    'title'       => __( 'Case Study Outcomes', 'your-textdomain' ),
    'categories'  => array( 'fulcrum-case-studies' ),
    'description' => __( 'Outcomes unlocked section with reusable case study classes.', 'your-textdomain' ),
    'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","className":"cs-section cs-outcomes-grid","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group cs-section cs-outcomes-grid">
    <!-- wp:paragraph {"className":"cs-section-label"} -->
    <p class="cs-section-label">Outcomes Unlocked</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":2} -->
    <h2>What the Client Can Now Do</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Beyond the technical improvements, the new foundation directly unlocks business capabilities that were previously out of reach:</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Build real-time warranty dashboards with current, trusted data</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Run vendor and claims performance analytics at scale</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Power fraud detection and anomaly models on live data feeds</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Feed Power BI, downstream data marts, Synapse, and AI workloads</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Onboard additional warranty data tables with minimal incremental effort</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"cs-outcome-item"} -->
            <div class="wp-block-group cs-outcome-item">
                <!-- wp:paragraph -->
                <p>Retire legacy extraction methods permanently — no looking back</p>
                <!-- /wp:paragraph -->
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