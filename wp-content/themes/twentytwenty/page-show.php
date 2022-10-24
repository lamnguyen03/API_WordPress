<?php get_header(); ?>
    <?php
    global $wpdb;
    $result = $wpdb->get_results( "SELECT * FROM wp_product");
    foreach ( $result as $print )  
    {?>
    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div style="width: 30rem;">
                    <img src="<?php echo $print->img; ?>">
                    <div>
                        <h5 class=""><?php echo $print->name; ?></h5>
                        <a href="#" class="btn btn-primary"><?php echo $print->price; ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    }
    ?>
<?php get_header(); ?>
