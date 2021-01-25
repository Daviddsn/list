<?php $v->layout('_themes',["style"=>"modal"]); ?>
<section id="abrirModal" class="new-item modal">
    <div class="container">
        <form action="<?=$router->route("web.create")?>" method="post">
            <div class="input-block">
                <label for="name">Nome *</label>
                <input type="text" placeholder="David Santos"  maxlength="100" required name="name" id="name">
            </div>
            <div class="input-block">
                <label for="email">E-mail </label>
                <input type="email" placeholder="teste@casamento.com"  maxlength="100"  name="email" id="email">
            </div>
            <div class="input-block">
                <label for="tel">Telefone *</label>
                <input type="tel" placeholder="(79) 98800-8800"  maxlength="16" required name="tel" id="tel">
            </div>

            <div class="input-block">
                <label for="box">Descrição *</label>
                <input type="text" value="<?=$box[0]->nome?>"  required name="box" id="box" readonly="true" />
            </div>
            
            <div class="btns">
                <input type="submit" value="Salvar" class="salvar">
                <a href="<?=$router->route("web.home")?>" title="Fechar" class="fechar">X Cancelar</a>

            </div>

        </form>
    </div>
</section>
