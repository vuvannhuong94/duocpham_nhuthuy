<?php foreach ($products as $product): ?>
<div class="item">
      <?= $this->Html->image($product->image,['style'=>'width:100%']) ?>
    <b><u class="padding-left-70"><a href="<?= $this->Url->build('/frontends/viewProduct/'.$product->id)?>" style="color: white;text-decoration: none;"><?= h($product->name) ?></a></u></b>
    <p style="text-align: center;color: white;"><?= h($product->description) ?></p>


</div>
<?php endforeach; ?> 


<div class="paginator pull-right">
    <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
</div>