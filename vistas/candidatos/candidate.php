<?php include '../_includes/header.php'; ?>

<?php 
    $nombres = ["josé", "pedro", "raúl", "juan", "maría","rafael", "luisa", "adrian", "alan", "martin"];
    $apellidos = ["pérez", "rodriguez", "hernández", "martínez", "garcía", "marín", "sánchez", "smith", "rivera", "alderson"];
    $puesto = ["Ingeniero de Software","Marketing Digital","Ingeniero de Sistemas","Marketing Digital","Wordpress Developer","Diseñador Visual","Diseñador Visual","Marketing Digital","Ingeniero de Software","Diseñador Creativo"];
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Candidates</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">

                <?php for ($i=0; $i < sizeof($nombres); $i++) {  ?>

                <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="../../assets/img/candiateds/<?php echo $i+1 ?>.png" alt="">
                        </div>
                        <a href="#"><h4><?php echo "$nombres[$i] $apellidos[$i]"; ?></h4></a>
                        <p><?php echo "$puesto[$i]" ?></p>
                    </div>
                </div>

                
                <?php } ?>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination_wrap">
                        <ul>
                            <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                            <li><a href="#"><span>01</span></a></li>
                            <li><a href="#"><span>02</span></a></li>
                            <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->
<?php include '../_includes/footer.php'; ?>