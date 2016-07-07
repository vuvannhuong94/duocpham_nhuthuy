

<span class="color-blue font-size-17 "><b><a href="">THÔNG TIN SỨC KHỎE</a></b></span>
<span class="color-white border-bottom-2" >______________________________________________________________________________________________________</span><br><br>
<b class="color-blue"><a href="<?= $this->Url->build('/frontends/newsway/'.$new->id)?>"><?= h($new->name) ?></a></b><br><br>

<div class=" pull-4">
            <?= $this->Html->image($new->image) ?>
</div>
<p> <?= $this->Text->autoParagraph(h($new->description)); ?> </p>