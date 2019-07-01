

<?php
   /*
   *
   * 	Template Name: Contact Form
   *
   */
   ?>


   <!DOCTYPE html>
   <html lang="en">
   <title></title><!--?php the_title(); ?-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <link rel="stylesheet" type='text/css' href="http://localhost:8888/befincasLocal/wp-content/themes/generatepress-child/style.css">



   <body>

     <?php
        /*
        *
        * 	Codigo para el formulario de contacto
        *
        */
        ?>

          <div class="w3-center w3-padding-64" id="contact">
            <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contáctanos</span>
          </div>
          <div id="formulario" class="w3-content" style="max-width:600px">

              <div class="w3-text-grey">

                <form class="w3-container w3-padding" method="post" action="">
                    <div class="w3-section">
                      <label>NOMBRE</label>
                      <input class="w3-hover-border-black" type="text" value="" name="f-nombre">
                    </div>
                    <div class="w3-section">
                      <label>CORREO</label>
                      <input class="w3-hover-border-black" type="text" value="" name="f-email">
                    </div>
                    <div class="w3-section">
                      <label>TELEFONO</label>
                      <input class="w3-hover-border-black" type="text" value="" name="f-telefono">
                    </div>
                    <div class="w3-section">
                      <label>MENSAJE</label>
                      <textarea class="w3-input w3-border w3-hover-border-black" id="subject" value="" name="f-subject" placeholder="Resuelve todas tus dudas." style="height:200px"></textarea>
                    </div>
                        <button class="w3-button w3-block w3-light-grey w3-padding-large" type="submit">
                      <i class="fa fa-paper-plane"></i> Enviar mensaje
                        </button>
                  </form>
              </div>
          </div>






   </body>
   </html>
