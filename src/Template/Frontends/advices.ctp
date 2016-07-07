        <span class="color-blue font-size-17 "><b><a href="">TƯ VẤN </a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________________________________________________</span><br><br>
      <?php foreach ($advices as $advice): ?>
        <div class=" pull-4">
            <?= $this->Html->image($advice->image) ?>
           <b class="color-blue"><a href="<?= $this->Url->build('/frontends/viewNew/'.$advice->id)?>"><?= h($advice->name) ?></a></b><br><br>
        </div>
        <span class="color-rgba-tb" >______________________________________________________________________________________________________</span><br><br>
        <?php endforeach; ?> 