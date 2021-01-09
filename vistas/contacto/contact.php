<?php include '../_includes/header.php'; ?>


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contáctanos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.82588888194!2d-77.08596813464403!3d-12.055497745346623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c946680d0099%3A0xc6def8804064a4e9!2sUniversidad%20Nacional%20Mayor%20de%20San%20Marcos!5e0!3m2!1ses-419!2spe!4v1597635870980!5m2!1ses-419!2spe" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Comunícate con nosotros</h2>
        </div>
        <div class="col-lg-8">

          <form class="form-contact contact_form" action="../contacto/contact_process.php" method="post">

            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje ... '" placeholder = 'Mensaje ... '></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu nombre'" placeholder = 'Ingresa tu nombre'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu email'" placeholder = 'Ingresa tu email'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Título del Mensaje'" placeholder = 'Título del Mensaje'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">

              <input type="submit" class="button button-contactForm btn_4 boxed-btn" value="Enviar Mensaje">
            </div>

          </form>

        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Lima, Perú.</h3>
              <p>{{Direccion}}</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>De Lunes a viernes de 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Escribenos por interno si lo prefieres!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->




<?php include '../_includes/footer.php'; ?>