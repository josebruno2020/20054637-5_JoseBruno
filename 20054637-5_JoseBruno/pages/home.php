<h1 class="text-center">Home</h1>

<p>Conheça nossos principais produtos</p>

<div class="row">
    <?php foreach ($produtos as $produto): ?>
        <div class="card">
            <a href="/produto?id=<?=$produto['id'];?>"><div class="card-title"><h4><?=$produto['nome'];?></h4></div></a>
        </div>
    <?php endforeach; ?>
</div>
