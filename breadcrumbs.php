<div class="breadcrumbs">
    <ul>
        <li><a href="<?php home_url();?>/#">Home</a></li>
        <?php
        // Get the current URL and split it into segments
        $url = rtrim($_SERVER['REQUEST_URI'], '/');
        $urlSegments = explode('/', $url);

        // Initialize an empty breadcrumb path
        $breadcrumbPath = '/';

        // Iterate through the URL segments to build the breadcrumb trail
        foreach ($urlSegments as $segment) {
            $breadcrumbPath .= $segment . '/';
            echo '<li><a href="' . $breadcrumbPath . '">' . ucwords(str_replace('-', ' ', $segment)) . '</a></li>';
        }
        ?>
    </ul>
</div>