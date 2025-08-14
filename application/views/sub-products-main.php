        

<section id="wf-subpage">
    

 
        <div class="subpage-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="subpage-title">
                            <h2><?=$title?></h2>
                        </div>

                        <?php 
                            $cnt = 1;

                            foreach($products['sub'] as $k => $v){

                                foreach($v as $k2 => $v2){

                                    if($cnt % 2 != 0){
                                        echo '<div class="row">';
                                    }

                                    echo '<div class="col-md-6">
                                        <a href="'.base_url('products/'.$productslug.'/'.$k).'" title="'.$v2.'" />
                                            <div class="service-item aos-init aos-animate" data-aos="fade-down">
                                                <img src="'.base_url('assets/img/subproducts/zproduct'.$cnt.'.png').'">
                                                <div class="prodcard"><h3>'.$v2.'</h3></div>
                                            </div>
                                        </a>
                                    </div>';

                                    if($cnt % 2 == 0){
                                        echo '</div>';
                                    }

                                    $cnt++;

                                }
                            }

                        ?>

                   
                       

                        <div class="clearfix"></div>
    
                    </div>
                </div>
            </div>
        </div>
  
</section>
