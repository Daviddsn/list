<?php $v->layout("_themes",["style"=>"listEdit"]) ?>
<div class="container">
    <h1 class="title">Sua Lista de Casamento</h1>
</div>
<div class="search container">
    <form action="/" method="get">
        <input type="search" name="pesquisa" id="pesquisa">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <a href="#abrirModal" class="add"><i class="fas fa-plus"></i> Novo item</a>
</div>
<section id="abrirModal" class="new-item modal">
    <div class="container">
        <form action="../../acao/cadastro_item.php" method="post">
            <div class="input-block">
                <label for="description">Descrição *</label>
                <input type="text" id="description">
            </div>
            <div class="input-block">
                <label for="count">Quantidade *</label>
                <input type="number" required name="count" id="count">
            </div>
            <div class="btns">
                <a href="#fechar" title="Fechar" class="fechar">X</a>
                <input type="submit" value="Salvar" class="salvar">
            </div>

        </form>
    </div>
</section>
<setion class="list">
    <div class="container">
        <ul>
            <li class="title-list">
                <h2>Quant.</h2>
                <h2>Nome</h2>
                <h2>Marca</h2>
            </li>
            <li class="item">
                <p class="quant">01<span class="unit">Cx</span></p>
                <p class="name-item">Jogo de Prato</p>
                <p class="brands-item">Duralex</p>

                <div class="edit">
                    <a href="#"><i class="far fa-edit"></i></a>
                    <a href="#"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="item">
                <p class="quant">01<span class="unit">Cx</span></p>
                <p class="name-item">Jogo de Prato</p>
                <p class="brands-item">Duralex</p>

                <div class="edit">
                    <a href="#"><i class="far fa-edit"></i></a>
                    <a href="#"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="item">
                <p class="quant">01<span class="unit">Cx</span></p>
                <p class="name-item">Jogo de Prato</p>
                <p class="brands-item">Duralex</p>

                <div class="edit">
                    <a href="#"><i class="far fa-edit"></i></a>
                    <a href="#"><i class="fas fa-trash"></i></a>
                </div>
            </li>
        </ul>
        <a href="#abrirModal" class="add fixed"><i class="fas fa-plus"></i></a>
    </div>
</setion><!--./END LIST-->

