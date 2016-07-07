<?php foreach ($products as $product): ?>
<div class="item">
        <?= $this->Html->image($product->image,['style="width:100%;"']) ?>
    <b><u class="padding-left-70"><a href="<?= $this->Url->build('/frontends/viewProduct/'.$product->id) ?>" style="color:white;"><?= h($product->name) ?></a></u></b>
    <p style="text-align: center;color: white;"><?= h($product->description) ?></p>
</div>
<?php endforeach; ?> 
<div class="paginator pull-right">
    <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
</div>


<?php foreach ($news as $new): ?><br><br><br><br>
    <div class="col-md-8">
        <span class="color-blue font-size-17 "><b><a href="<?=$this->Url->build('/frontends/healthInformation/')?>"><?=(__('THÔNG TIN SỨC KHỎE'))?></a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________</span><br><br>
        <b class="color-blue padding-left-12"><a href="<?= $this->Url->build('/frontends/viewNew/'.$new->id)?>"><?= h($new->name) ?></a></b><br><br>
        <div class="col-md-6 pull-left">
                           <?= $this->Html->image($new->image,['style="width:100%;padding-top:10px;"']) ?>
        </div>
        <div class="col-md-6 pull-right">
            <p class="padding-left-10"><?= h($new->description) ?> </p>
        </div>
        <span class="color-rgba-tb" >_______________________________________________________________</span><br>
 

        <span class="color-blue"><b class="font-size-40 padding-left-20">.</b></span><a href="<?= $this->Url->build('/frontends/viewNew/'.$new->id) ?> ">  <?= h($new->name); ?></a><br>
          </div>
   
 <?php endforeach; ?>
    <div class="col-md-4 pull-right">
        <?= $this->Html->image('icon_ct10.png');?>
        <h4 class="color-blue"><a href="">QUY TRÌNH SẢN XUẤT</a></h4>
        <p>Đạt tiêu chuẩn WHO-GMP,GMP,GLP,GSP và chủ trương thành phố di dời các cơ sở sản xuất ra khỏi nội thành,công ty đã tiến hành đầu tư nhà máy mới trên tổng diện tích 10.200m2 tại số 930 C2 đường C khu công nghiệp cắt lái II,P.thành mỹ lợi,từ năm 2003 thực hiện chủ trương của bộ y tế,tất cả nhà sản xuất dược phẩm phải Q2,thành phố Hồ Chí Minh.</p>

    </div>
   
