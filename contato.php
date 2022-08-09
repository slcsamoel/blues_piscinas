<?php 
    include_once './head.php';
    include_once './menu.php' 
?>


<div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
    <div class="container">
       <div class="row">
          <div class="col-md-7">
             <h3>Contato</h3>
          </div>
          <div class="col-md-5">
          </div>
       </div>
       <div class="row">
          <div class="col-md-7">
             <div class="contact-form">
                <form>
                   <input type="text" placeholder="Nome" />
                   <input type="email" placeholder="Email" />
                   <input type="text" placeholder="Telefone" />
                   <input type="text" placeholder="Tipo de Serviço">
                   <textarea placeholder="Mensagem"></textarea>
                   <input type="submit" value="ENVIAR">
                </form>
             </div>
          </div>
          <div class="col-md-5 text_align_center">
             <img class="img-responsive" src="imgs/man_cartoon.png" alt="#" />
          </div>
       </div>
    </div>
 </div>

 <?php 
       
       include_once './footer.php';
    
?>