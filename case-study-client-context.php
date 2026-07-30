<?php
return array(
    'title'       => __( 'Case Study Client Context', 'hello-elementor-child' ),
    'categories'  => array( 'fulcrum-case-studies' ),
    'description' => __( 'Client context / intro note section with reusable case study classes.', 'hello-elementor-child' ),
    'content'     => <<<'HTML'
<!-- wp:group {"className":"cs-client-tag","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group cs-client-tag">
    <!-- wp:paragraph -->
    <p><strong>Client:</strong> A premier insurance services company managing over $3.5 billion in premium across North America, Europe, and Australia — specializing in Property, Casualty, Specialty insurance, and Warranty &amp; Protection programs for carriers, dealers, OEMs, and consumer product retailers.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
HTML
);