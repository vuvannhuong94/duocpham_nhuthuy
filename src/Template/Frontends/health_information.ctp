        <span class="color-blue font-size-17 "><b><a href="">THÔNG TIN SỨC KHỎE </a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________________________________________________</span><br><br>
      <?php foreach ($healths as $health): ?>
        <div class=" pull-4">
            <?= $this->Html->image($health->image) ?>
           <b class="color-blue"><a href="<?= $this->Url->build('/frontends/viewNew/'.$health->id)?>"><?= h($health->name) ?></a></b><br><br>
        </div>
        
        
        
        
        <span class="color-rgba-tb" >______________________________________________________________________________________________________</span><br><br>

   
    
<?php endforeach; ?> 