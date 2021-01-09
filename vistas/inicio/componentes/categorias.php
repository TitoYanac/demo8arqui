<?php 
	$populares = ["Arte & Diseño","Marketing","Telemarketing","Software & Web","Administración","Educación","Ingeniería","Vestidos / Textiles"]
?>

    <!-- catagory_area -->
    <!-- <div class="catagory_area">
        <div class="container">
            <div class="row cat_search">
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" placeholder="Palabra clave">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option data-display="Ubicación">Ubicación</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Rangpur</option>
                            <option value="4">Sylet</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide">
                            <option data-display="Categoría">Categoría</option>
                            <option value="1">Categoría 1</option>
                            <option value="2">Categoría 2</option>
                            <option value="4">Categoría 3</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <a href="#" class="boxed-btn3">Busca un Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_search d-flex align-items-center">
                        <span>Busquedas Populares:</span>
                        <ul>
                        	<?php for ($i=0; $i < sizeof($populares); $i++) {  ?>
                            <li><a href="#"><?php echo "$populares[$i]"; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ catagory_area -->


    <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Categorias Populares</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php for ($i=0; $i < sizeof($populares); $i++) {  ?>

                <div class="col-lg-4 col-xl-3 col-md-6">
                    <a href="jobs.html" >
                        <div class="single_catagory">
                            <h4><?php echo "$populares[$i]"; ?></h4>
                            <p> <span>50</span> </p>
                            <p>Trabajos Disponibles</p>
                        </div>
                    </a>
                </div>

            <?php } ?>
            </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->


