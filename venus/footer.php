<footer class="app-footer bg-dark pb-0 border-0 text-md-left text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-4">
	            <?php
                    if(is_active_sidebar('ftr1')){
                        dynamic_sidebar('ftr1');
                    }
	            ?>
            </div>

            <div class="col-md-2 mb-md-0 mb-4">
	            <?php
	            if(is_active_sidebar('ftr2')){
		           $sidebar = dynamic_sidebar('ftr2');

	            }
	            ?>
            </div>
            <div class="col-md-2 mb-md-0 mb-4">
	            <?php
	            if(is_active_sidebar('ftr3')){
		            $sidebar = dynamic_sidebar('ftr3');
	            }
	            ?>
            </div>
            <div class="col-md-2 mb-md-0 mb-4">
	            <?php
	            if(is_active_sidebar('ftr4')){
		            $sidebar = dynamic_sidebar('ftr4');
	            }
	            ?>
            </div>
        </div>
    </div>
    <div class="app-secondary-footer mt-md-5 mt-3 text-center">
        <div class="container">
            <div class="row">
                <div class="col">
	                <?php
	                if(is_active_sidebar('ftr5')){
		                $sidebar = dynamic_sidebar('ftr5');
	                }
	                ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<?php
wp_footer();
?>

</body>

</html>