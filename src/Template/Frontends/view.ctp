
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        
        <tr>
          
            <td><?= $this->Html->image($product->image) ?></td>
        </tr>
        
      
    </table>
    <div class="row">
        <h4><?= __('Công dụng') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>




