
    <?php wp_footer(); ?>


    <?php
        // Figure out what our server name is
        $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        // If it's the dev environment...
        if ($host == 'wordpress-boilerplate.dev/') {
            // Then provide the JS files individually for easier debugging.
            include 'footer-scripts.php';
        } else {
            // Otherwise, provide the compiled and uglified JS file.
            echo '<script src="/wp-content/themes/Wordpress-Boilerplate-Theme/_ui/compiled/footer-scripts.min.js"></script>';
        }
    ?>
    </body>
</html>