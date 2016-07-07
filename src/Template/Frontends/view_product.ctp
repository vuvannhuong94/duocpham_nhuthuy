
 <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <td><?= $this->Html->image($product->image) ?></td>
        </tr>
        <tr>
            <td><?= __('giá:').h($product->price).__('VND') ?></td>
        </tr>

    </table>
    <div class="row">
        <h4><?= __('Công dụng') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>

 <?= $this->Form->Postlink('<i class = "glyphicon glyphicon-shooping-cart"></i> 
added baskets','/frontends/addToCart/'.$product->id,['class'=>'btn btn-primary','escape'=>false]);?>

<?= $this->Flash->render();?>   
