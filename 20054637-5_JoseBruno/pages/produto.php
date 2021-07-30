<h1 class="text-center">Produto</h1>

<?php if(isset($produto) && !empty($produto)): ?>
<div class="card">
    <div class="card-header">
        <h3><?=$produto['nome'];?></h3>
    </div>

</div>

<?php endif; ?>
