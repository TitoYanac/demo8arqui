
    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Feedbacks Destacados</h3>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        
                    	<?php for ($i=0; $i < 3; $i++) { ?>
	                        <div class="single_carousel">
	                            <div class="row">
	                                <div class="col-lg-11">
	                                    <div class="single_testmonial d-flex align-items-center">
	                                        <div class="thumb">
	                                            <img style="width: 100%"  src="../../assets/img/testmonial/author<?php echo $i+1; ?>.png" alt="">
	                                            <div class="quote_icon">
	                                                <i class="Flaticon flaticon-quote"></i>
	                                            </div>
	                                        </div>
	                                        <div class="info">
	                                            <p>"Una increible plataforma muy util y facil de usar 100% recomendada y confiable".</p>
	                                            <span>- usuario destacado -</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                   		<?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->