<?php 

$brand_query = "SELECT * FROM course";
       $query_run = mysqli_query($con, $brand_query);
        
       if(mysqli_num_rows($query_run) > 0)
       {
        foreach($query_run as $brand)
        {
          ?>
          <input type="checkbox" name="list" value="<? $brand['course']; ?>" /> <?= $brand['course']; ?> <br/>
          <?php
        }
       }
       else {
        echo "no record";
       }
      ?>