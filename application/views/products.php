        

<section id="wf-subpage">
    

 
        <div class="subpage-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="subpage-title">
                            <h2><?=$title;?></h2>
                        </div>

                        <?php 
                            $cnt = 1;

                            foreach($product_details as $k => $v){

                                    if($cnt % 2 != 0){
                                        echo '<div class="row">';
                                    }

                                    echo '<div class="col-md-6"><div class="service-item display aos-init aos-animate" data-aos="fade-down">
                                                <img src="'.base_url('assets/img/products/'.$v['pr_slug'].'/'.$v['project_image']).'">
                                                <div class="prodcard"><h3>'.strtoupper($v['project_name']).'</h3></div>
                                            </div></div>';

                                    if($cnt % 2 == 0){
                                        echo '</div>';
                                    }

                                    $cnt++;

                            }


                        ?>


                        <div class="clearfix"></div>
    
                    </div>
                </div>
            </div>
        </div>
  
</section>
