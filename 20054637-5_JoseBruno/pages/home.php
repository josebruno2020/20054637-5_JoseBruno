<h1 class="text-center">Home</h1>

<div class="row">
    <p>Conheça nossos principais produtos</p>
    <section class="produtos">
        <?php foreach ($produtos as $produto): ?>
            <article class="card">
                <div class="card-header">
                    <a href="/produto?id=<?=$produto['id'];?>"><div class="card-title"><h4><?=$produto['nome'];?></h4></div></a>
                </div>
                <div class="card-body">
                    <p class="produto-descricao">
                        <?=$produto['descricao']; ?>
                    </p>
                    <img class="img-responsive produto-img" src="/images/<?=$produto['img'];?>" alt="">
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</div>
