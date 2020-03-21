
    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <!--- use a class row in a dive to get things good -->
            <div class="row">
                <select >
                    <option >Gammes 01</option>
                    <option >Gammes 02</option>
                    <option >Gammes 01</option>
                     <option >Gammes 01</option>
                     <option >Gammes 01</option>
                     <option >Gammes 01</option>
                </select>
               
            </div>
                    
                    <?php foreach ($gammes as $gamme ) {
                     
                    ?>       
                            <div class="row" id="product-list">
                                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                                    <div class="single-product-item">
                                        <figure>
                                            <a href="#"><img src="<?php echo $gamme->images; ?>" alt=""></a>
                                            <div class="p-status"><?php echo $gamme->Nouveaute; ?></div>
                                        </figure>
                                        <div class="product-text">
                                            <h6><?php echo $gamme->description; ?></h6>
                                            <p><?php echo $gamme->prix; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
          
            </div>
        </div>
    </section>
