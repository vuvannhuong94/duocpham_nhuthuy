 <span class="color-blue font-size-17 "><b><a href=""><?=('HỆ THỐNG PHÂN PHỐI')?></a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________________________________________________</span><br><br>
<?php foreach ($distributions as $distribution):?>
    <h4><?= h($distribution->name) ?></h4>
    <div class="row" style="padding-left: 15px;">
        <?= $this->Text->autoParagraph(h($distribution->description)); ?>
    </div>
     <span class="color-rgba-tb" >______________________________________________________________________________________________________</span><br><br>
<?php endforeach;?>