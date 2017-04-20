<!--Footer-->
<footer class="page-footer center-on-small-only primary-color-dark">
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 col-md-offset-1">
                <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>
                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
            </div>
            <!--/.First column-->
            <hr class="hidden-md-up">
            <!--Second column-->
            <div class="col-md-2">
                <h5 class="title">First column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer1',
                'theme_location'    => 'footer1',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Second column-->
            <hr class="hidden-md-up">
            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer2',
                'theme_location'    => 'footer2',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Third column-->
            <hr class="hidden-md-up">
            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer3',
                'theme_location'    => 'footer3',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->
            
<?php wp_footer(); ?>
</body>
</html>     
                