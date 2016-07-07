

<?php foreach ($product as $category): ?>
<div class="item">
      <?= $this->Html->image($category->image,['style'=>'width:100%']) ?>
    <b><u class="padding-left-70"><a href="<?= $this->Url->build('/frontends/viewProduct/'.$category->id)?>" style="color: white;text-decoration: none;"><?= h($category->name) ?></a></u></b>
    <p style="text-align: center;color: white;"><?= h($category->description) ?></p>


</div>
<?php endforeach; ?> 
