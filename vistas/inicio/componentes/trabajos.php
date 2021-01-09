<!-- job_listing_area_start  -->

<?php 
	$puesto = ["Ingeniero de Software","Ingeniero de Sistemas","Marketing Digital","Wordpress Developer","Diseñador Visual","Ingeniero de Software","Diseñador Creativo"];
	$lugar = ["Lima, Peru","Piura, Peru","Junin, Peru","Arequipa, Peru","Puno, Peru","Tacna, Peru","Cajamarca, Peru"];
	$fecha = ["24 enero del 2021","25 enero del 2021","26 enero del 2021","27 enero del 2021","30 enero del 2021","30 enero del 2021","31 enero del 2021"];

?>

    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Proyectos más Recientes</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.php" class="boxed-btn4">Busca mas Proyectos</a>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">

                	<?php for ($i=0; $i < sizeof($puesto); $i++) {  ?>

	                    <div class="col-lg-12 col-md-12">
	                        <div class="single_jobs white-bg d-flex justify-content-between">
	                            <div class="jobs_left d-flex align-items-center">
	                                <div class="thumb">
	                                    <img src="../../assets/img/svg_icon/<?php echo $i+1 ?>.svg" alt="">
	                                </div>
	                                <div class="jobs_conetent">
	                                    <a href="../trabajos/job_details.php"><h4><?php echo "$puesto[$i]"; ?></h4></a>
	                                    <div class="links_locat d-flex align-items-center">
	                                        <div class="location">
	                                            <p> <i class="fa fa-map-marker"></i><?php echo "$lugar[$i]"; ?></p>
	                                        </div>
	                                        <div class="location">
	                                            <p> <i class="fa fa-clock-o"></i> Tiempo-parcial</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="jobs_right">
	                                <div class="apply_now">
	                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
	                                    <a href="../trabajos/job_details.php" class="boxed-btn3">Aplicar Ahora!</a>
	                                </div>
	                                <div class="date">
	                                    <p>Fecha Limite: <?php echo "$fecha[$i]"; ?></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

                <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->
