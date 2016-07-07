

<?php foreach ($searches as $search): ?>
<div class="item">
      <?= $this->Html->image($search->image,['style'=>'width:100%']) ?>
    <b><u class="padding-left-70"><a href="<?= $this->Url->build('/frontends/viewProduct/'.$search->id)?>" style="color: white;text-decoration: none;"><?= h($search->name) ?></a></u></b>
    <p style="text-align: center;color: white;"><?= h($search->description) ?></p>
      
   
</div>
<?php endforeach; ?> 
