<?php include '../_includes/header.php'; ?>
<?php 
    $puesto = ["Ingeniero de Software","Ingeniero de Sistemas","Digital Marketer","Wordpress Developer","Diseñador Visual","Ingeniero de Software","Diseñador Creativo"];
    $lugar = ["Lima, Peru","Piura, Peru","Junin, Peru","Arequipa, Peru","Puno, Peru","Tacna, Peru","Cajamarca, Peru"];
    $fecha = ["24 enero del 2021","25 enero del 2021","26 enero del 2021","27 enero del 2021","30 enero del 2021","30 enero del 2021","31 enero del 2021"];
    $departamento = ["Tingo María, Perú", "Ilo, Perú", "Paita, Perú", "Cañete, Peru", "Talara, Perú", "Barcelona, España", "Moquegua, Perú", "Ciudad de México, México", "Lambayeque, Perú", "Caracas, Distrito Capital, Venezuela", "Abancay, Perú", "Barranca, Perú", "Huaral, Perú", "Moyobamba, Perú", "Jaén, Perú", "Puerto Maldonado, Perú", "Ventanilla, Peru", "Pisco, Perú", "Tumbes, Perú", "Madrid, España", "Santiago de Chile, Chile", "Juliaca, Perú", "Buenos Aires, Argentina", "Puno, Perú", "Chincha Alta, Perú", "Sullana, Perú", "Huaraz, Perú", "Ayacucho, Perú", "Huánuco, Perú", "Huacho, Perú", "Tarapoto, Perú", "Pucallpa, Perú", "Cajamarca, Perú", "Tacna, Perú", "Chimbote, Perú", "Callao, Perú", "Iquitos, Perú", "Huancayo, Perú", "Ica, Perú", "Cuzco, Perú", "Piura, Peru", "Arequipa, Perú", "Chiclayo, Perú", "Trujillo, Perú", "Lima, Perú"];

?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>4536+ Proyectos Disponibles</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="job_filter white-bg">
                        <div class="form_inner white-bg">
                            <h3>Filtro</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <input type="text" placeholder="Palabra Clave">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Ubicación">Ubicación</option>
                                                <?php for ($i=0; $i < sizeof($departamento); $i++) {  ?>
                                                <option value="<?php $i ?>"><?php echo "$departamento[$i]"; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Categoría">Categoría</option>
                                                <option value="1">Arte & Diseño</option>
                                                <option value="2">Marketing</option>
                                                <option value="2">Wordpress Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Experiencia">Experiencia</option>
                                                <option value="1">Experiencia 1</option>
                                                <option value="2">Experiencia 2 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Tipo de Proyecto">Tipo de Proyecto</option>
                                                <option value="1">Investigación</option>
                                                <option value="1">Código</option>
                                                <option value="1">Codigo</option>
                                                <option value="2">Educación</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Calificación">Calificación</option>
                                                <option value="1">Calificación 1</option>
                                                <option value="2">Calificación 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Género">Género</option>
                                                <option value="1">hombre</option>
                                                <option value="2">mujer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="range_wrap">
                            <label for="amount">Rango de Pagos:</label>
                            <div id="slider-range"></div>
                            <p>
                                <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-size: 14px; font-weight:400;">
                            </p>
                        </div>
                        <div class="reset_btn">
                            <button  class="boxed-btn3 w-100" type="submit">Filtrar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="recent_joblist_wrap">
                        <div class="recent_joblist white-bg ">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4>Lista de Proyectos</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="serch_cat d-flex justify-content-end">
                                        <select>
                                            <option data-display="Orden">Orden</option>
                                            <option value="1">Mas Recientes</option>
                                            <option value="1">Mas Vistos</option>
                                            <option value="2">Pago Ascendente</option>
                                            <option value="4">Pago Descendente</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job_lists m-0">
                        <div class="row">

                    <?php for ($i=0; $i < sizeof($puesto); $i++) {  ?>

                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="../../assets/img/svg_icon/<?php echo $i+1; ?>.svg" alt="">
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
    </div>
</div>
    <!-- job_listing_area_end  -->
<?php include '../_includes/footer.php'; ?>