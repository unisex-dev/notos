          <form id="contact-form" class="contact-form" name="<?php echo basename(get_permalink()); ?>" method="post" action="#">
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" required="required"
                     tavindex="1" accesskey="N" title="nombre" placeholder="Su Nombre" autofocus>
                    <input type="text" name="company" class="form-control" tavindex="2" accesskey="C" title="compañía" placeholder="El Nombre De Su Compañia"> </div>
                  <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" required="required" tavindex="3" accesskey="E" title="email" placeholder="Su Direccion Email">
                    <input type="url" name="website" class="form-control" tavindex="4" accesskey="U" title="url" placeholder="Sitio Web"> 
                  </div>
                  <div class="form-group col-md-12"> 
                    <textarea name="message" id="message" required="required" class=" form-control" rows="8" tavindex="5" accesskey="M" placeholder="Su Mensaje"></textarea> 
                  </div>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-dark" tavindex="6" accesskey="S" title="Enviar">Enviar</button>
                </div>
                
          </form>               