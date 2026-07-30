<?php
return array(
    'title'       => __( 'Case Study Differentiators', 'your-textdomain' ),
    'categories'  => array( 'fulcrum-case-studies' ),
    'description' => __( 'Dark differentiators section with reusable case study classes.', 'your-textdomain' ),
    'content'     => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","className":"cs-diff-section","layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group alignfull cs-diff-section">
    <!-- wp:paragraph {"className":"cs-section-label"} -->
    <p class="cs-section-label">Why Fulcrum</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":2} -->
    <h2>What Made This Work</h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"cs-challenge-stack"} -->
            <div class="wp-block-group cs-challenge-stack">
                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">01</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Deep expertise in event-export-to-Lakehouse patterns — not just generic ETL, but purpose-built Fabric-native ingestion design.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">02</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Partition-aware incremental design that eliminates brute-force reloads and scales gracefully as data volumes grow.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">03</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Resilience and monitoring built in from day one — validation, alerting, and replay capability as first-class requirements.</p>
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
                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">04</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Bronze layer discipline — governed, structured, and ready for Silver/Gold transformation without rework.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">05</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Knowledge transfer and operational readiness — the client's team was equipped to own the system, not depend on us indefinitely.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"cs-diff-card"} -->
                <div class="wp-block-group cs-diff-card">
                    <!-- wp:paragraph {"className":"cs-num"} -->
                    <p class="cs-num">06</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Parallel verification during transition ensured a clean, risk-free cutover with full confidence in data continuity.</p>
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