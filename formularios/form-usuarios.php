       <form id="contact-form" class="contact-form" name="form-<?php echo get_author_name(); ?>" method="post" action="#">
                
          <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" required="required" tavindex="1" accesskey="N" title="Nombre:" placeholder="Su Nombre" autofocus>
                <input type="text" name="surname" class="form-control" required="required" tavindex="2" accesskey="A" title="Apellido:" placeholder="Apellido" autofocus>
                <input type="email" name="email" class="form-control" required="required" tavindex="3" accesskey="E" title="E-Mail:" placeholder="Su Direccion Email" autofocus>
                <select class="form-control" id="subject" name="subject" accesskey="T" required="required" tavindex="4">
                    <option>Elija Tema:</option>
                    <option>Lorem</option>
                    <option>Ipsum</option>
                    <option>Dolor Sit Amet</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <textarea name="message" id="message" class="form-control" required="required"rows="8" placeholder="Mensaje"></textarea> 
            </div>
            <button type="submit" class="btn btn-block btn-dark" tavindex="6" accesskey="S" title="Enviar">Enviar</button>
        </div>
                
      </form>


 