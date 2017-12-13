<section class="container" id="contact">
  <div class="row">
    <div class="heading">
      <h2 class="title">
        Contate-nos!
        <span class="title-desc">Está com dúvidas no processo ou deseja fazer um orçamento? Fale conosco!</span>
      </h2>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <ul class="info">
        <li>
          <span><i class="fa fa-map-marker"></i></span>
          <p>Rua das Casas, 2055, Bairro Jardins - Fortaleza, CE, Brasil.</p>
        </li>
        <!-- <li>
          <span><i class="fa fa-envelope"></i></span>
          <p><a href="#">comercial@completta.com.br</a></p>
        </li> -->
        <li>
          <span><i class="fa fa-phone"></i></span>
          <p><a href="#">+55 85 3355-6363</a></p>
        </li>
        <li>
          <span><i class="fa fa-whatsapp"></i></span>
          <p><a href="#">+55 85 99716-2126</a></p>
        </li>
      </ul>

    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <h4>Mande uma mensagem</h4> -->
      <form class="" action="conf/mail/atendimento-solicitado.php" method="post">
        <input class="form-custom half" type="text" required oninvalid="this.setCustomValidity('Nome inválido')" oninput="setCustomValidity('')" pattern=".{1,}[a-zA-Z]+" required title="Nome inválido" placeholder="SEU NOME" name="nome">
        <input class="form-custom half" type="text" required oninvalid="this.setCustomValidity('Endereço de email inválido')" oninput="setCustomValidity('')" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required title="Endereço de email inválido" placeholder="SEU EMAIL" name="email">
        <input class="form-custom half" type="text" required oninvalid="this.setCustomValidity('Número de contato inválido')" oninput="setCustomValidity('')" pattern="[0-9]*" max="11" required title="Número de contato inválido"placeholder="TELEFONE" name="telefone">
        <input class="form-custom half" type="text" placeholder="ASSUNTO" name="assunto">
        <textarea class="form-custom" style="height: auto;" rows="4" type="text" placeholder="MENSAGEM" name="msg"></textarea>
        <button type="submit" class="btn btn-border">ENVIAR</button>
        <?php if (isset($_SESSION["success"])){?>
          <div class="alert alert-success fade in text-center" style="margin-top:70px; border-radius: 0px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $_SESSION["success"]?>
          </div>
          <?php
          unset($_SESSION["success"]);
        }?>
        <?php if (isset($_SESSION["danger"])){?>
          <div class="alert alert-warning fade in text-center" style="margin-top:70px; border-radius: 0px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $_SESSION["danger"]?>
          </div>
          <?php
          unset($_SESSION["danger"]);
        }?>
      </form>
    </div>
  </div>

</section>
<div id="mapa">
</div>
