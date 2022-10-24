<?php get_header(); ?>
<table border="1">
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Image</th>
     <th>Price</th>
     
    </tr>
      <?php
        global $wpdb;
        $result = $wpdb->get_results( "SELECT * FROM product");
        foreach ( $result as $print )   {?>
          <tr>
                  <td>  <?php echo $print->id; ?> </td>
                  <td><?php echo $print->name; ?> </td>
                  <td><img src="{{$print->img}}"></td>
                  <td><?php echo $print->price; ?> </td>
          </tr>
            <?php }
      ?>

</table>
<?php get_header(); ?>