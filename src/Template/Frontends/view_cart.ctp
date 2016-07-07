
    <?php $cart=$this->request->session()->read('cart')?>
    <?php if($cart):?>
<table cellpadding="0" cellspacing="0" class="table">
    <thead>
        <tr>
            <th><?= __('name') ?></th>
            <th><?= __('quantity') ?></th>
            <th><?= __('price') ?></th>
            <th><?= __('total') ?></th>
            <th><?= __('Action') ?></th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($cart as $product):?>
        <tr>
            <td> <?= $product['name'];?></td>
            <td> <?= $product['quantity'];?></td>
            <td> <?= $product['price'];?></td>
            <td> <?= $product['price']*$product['quantity'];?></td>
            <td><?= $this->Form->postLink(__('delete'),['action'=>'deleteCart',$product['id']]);?></td>
        </tr>
            <?php endforeach; ?>
        
         <?php else:?>
              <?='bạn chưa chọn sản phẩm nào';?>  
            <?php endif;?>
    </tbody>
   
</table>
<h3 style="color: black;"><?= __('Tổng Tiền:').$payments;?></h3>




