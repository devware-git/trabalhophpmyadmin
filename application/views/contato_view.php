    <!-- Page Content -->
    <div class="container">
<br>
<br>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 text-center">
        <small>Fale conosco</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contato</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d479.8106692328139!2d-48.010609!3d-15.831068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25abb736422337f4!2sVista+Shopping!5e0!3m2!1spt-BR!2sbr!4v1497624263725" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalhes do contato</h3>
          <p>
            Rua das figueiras lote 07 sala 409
            <br>
            <br>
            vista shopping Aguás Claras-DF
          </p>
          <p>
            <abbr title="Phone">Numero:</abbr>: (61) 90000-0000
          </p>
          <p>
            <abbr title="Email">Email:</abbr>:
            <a href="mailto:name@example.com">trainingcursos@gmail.com
            </a>
          </p>
          <p>
            <h7 title="Hours">Escritorio</h7>: segunda á sexta : 9:00 AM as 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3></h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nome:</label>
                <input type="text" class="form-control" id="name" placeholder="Nome" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="(00)00000-0000" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Fale conosco:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" placeholder="Mensagem" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->