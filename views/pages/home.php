<?php $v->layout('_themes',["style"=>"listitem"]); ?>


<ul class="list">
    <?php
    if(!empty($boxs)):
        foreach ($boxs as $box):
    ?>
    <li class="item" >
        <div class="item-block header">
            <h2 class="title">Nome</h2>
            <p class="name-item"><?=$box->nome?></p>
        </div>
        <div class="item-block">
            <h2 class="title">Quant.</h2>
            <p class="quant"><?=$box->quant?><span class="unit">Cx</span></p>
        </div>
        <div class="item-block">
            <h2 class="title">Marca</h2>
            <p class="brands-item">----</p>
        </div>

        <button class="box"  data-action="<?=$router->route("web.redirect")?>" data-id="<?=$box->id_box?>"><i class="fas fa-gift"></i>Presentear</button>
    </li>
    <?php
        endforeach;
      endif;
    ?>
</ul>
<?php $v->start("js");?>
    <script>

        $("body").on("click","[data-action]",function (e){
            e.preventDefault();
            let data = $(this).data();

            $.post(data.action, data,function (data){
                window.location = data;
            });

        })
    </script>
<?php $v->end();?>