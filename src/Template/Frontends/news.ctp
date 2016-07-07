

  
        <span class="color-blue font-size-17 "><b><a href=""> TIN TỨC </a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________________________________________________</span><br><br>
      <?php foreach ($news as $new): ?>
        <div class=" pull-4">
            <?= $this->Html->image($new->image) ?>
           <b class="color-blue"><a href="<?= $this->Url->build('/frontends/viewNew/'.$new->id)?>"><?= h($new->name) ?></a></b><br><br>
        </div>
        
        
        
        
        <span class="color-rgba-tb" >______________________________________________________________________________________________________</span><br><br>

   
    
<?php endforeach; ?>      

