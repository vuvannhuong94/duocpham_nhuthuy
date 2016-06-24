
<?php foreach ($news as $new): ?>
    <div class="col-md-8">
        <span class="color-blue font-size-17 "><b><a href="">THÔNG TIN SỨC KHỎE</a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________</span><br><br>
        <b class="color-blue padding-left-12"><a href=""><?= h($new->name) ?></a></b><br><br>
        <div class="col-md-6 pull-left">
                           <?= $this->Html->image($new->image,['style="width:100%;padding-top:10px;"']) ?>
        </div>
        
        <span class="color-rgba-tb" >_______________________________________________________________</span><br>

          <p class="padding-left-10"><?= h($new->description) ?> </p>
    </div>
    
<?php endforeach; ?>      

