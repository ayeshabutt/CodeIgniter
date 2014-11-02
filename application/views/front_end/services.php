<?php //echo "<pre>";print_r($query);exit; 
$css_array = array('icon-heart icon-md icon-color1','icon-signal icon-md icon-color2','icon-star icon-md icon-color3');
//print_r($css_array[0]);
?>
<section id="services">
  <div class="container">
    <div class="box first">
      <div class="row">
      <?php for($i=0;$i<=2;$i++){?>
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="<?php echo $css_array[$i]?>"></i>
            <h4><a href="<?php echo base_url() . "index.php/memories_event/page_detail?id=" . $query[$i]->id; ?>"><?php echo $query[$i]->name; ?></a></h4>
          </div>
        </div>
        <?php }?>
        <!--
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="icon-signal icon-md icon-color2"></i>
            <h4> Corporate</h4>
          </div>
        </div>
       
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="icon-star icon-md icon-color3"></i>
            <h4>Birthday/Anniversary</h4>
          </div>
        </div>
        -->
       
        
      </div>
      <!--/.row--> 
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#services-->