<?php 
    $nombres = ["josé", "pedro", "raúl", "juan", "maría","rafael", "luisa", "adrian", "alan", "martin"];
    $apellidos = ["pérez", "rodriguez", "hernández", "martínez", "garcía", "marín", "sánchez", "smith", "rivera", "alderson"];
    $puesto = ["Ingeniero de Software","Marketing Digital","Ingeniero de Sistemas","Marketing Digital","Wordpress Developer","Diseñador Visual","Diseñador Visual","Marketing Digital","Ingeniero de Software","Diseñador Creativo"];
?>

<!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Candidatos Destacados</h3>
                    </div>
                </div>
            </div>
            <div class="row">



            	


                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <?php for ($i=0; $i < sizeof($nombres); $i++) {  ?>

                
		                    <div class="single_candidates text-center">
		                        <div class="thumb">
		                            <img src="../../assets/img/candiateds/<?php echo $i+1 ?>.png" alt="">
		                        </div>
		                        <a href="#"><h4><?php echo "$nombres[$i] $apellidos[$i]"; ?></h4></a>
		                        <p><?php echo "$puesto[$i]" ?></p>
		                    </div>
		                

		                
		                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->