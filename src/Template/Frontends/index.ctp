<div class="col-md-3">
    <p class="color-blue border-bottom-2 font-size-17"><b><a href="">CATEGORY</a></b></p>
    <?php foreach ($products as $product): ?>
    <table class=" table">
        <tr class="tr">
            <td>	<a href="">  <?= h($product->name) ?>   </a>  </td>
        </tr>
    </table>
    <?php endforeach; ?>
    <p class="color-blue border-bottom-2 font-size-17"><a href=""><b>HỖ TRỢ TRỰC TUYẾN</b></a></p>
    <img src="assets\images\icon_online.png"/><a href=""><span class="padding-left-40">Hỗ trợ viên 1</span></a><br><br>
    <img src="assets\images\icon_notonline.png"/><a href=""><span class="padding-left-40">Hỗ trợ viên 2</span></a><br><br>
    <span class="color-rgba-tb">________________________________</span>

    <?php foreach ($footers as $footer): ?>

    <h3><img  class="color-blue" src="assets\images\icon_dt.png"/><span class="color-blue"><a href=""><?= h($footer->phone); ?></a></span>
    </h3>
     <?php endforeach; ?>
    
     <?php foreach ($users as $user): ?>
    <img src="assets\images\icon_gmail.png"/><a href=""><?= h($user->email);?></a>
     <?php endforeach; ?>
    <br><br>

    <img src="assets\images\icon_hoidap.png"/>
    <br><br>	
    <?php foreach ($answers as $answer): ?>
    
    <img src="assets\images\icon_hoi.png"/><a href=""><?= h($answer->name)?></a><br><br>
    <p><b><?= h($answer->answer)?></b></p>

   
    <?php endforeach; ?>
</div>


<div class="col-md-9">
    <?php foreach ($products as $product): ?>
    <div class="col-md-4 padding-left-40">
        <div class="backgroup-color-747576">
        <?= $this->Html->image($product->image,['style="width:100%;"']) ?>
            <b><u class="padding-left-70"><a href="" style="color:white;"><?= h($product->name) ?></a></u></b>
            <p style="text-align: center;color: white;"><?= h($product->description) ?></p>
        </div>
    </div>
<?php endforeach; ?> 






<?php foreach ($news as $new): ?>
    <div class="col-md-8">
        <span class="color-blue font-size-17 "><b><a href="">THÔNG TIN SỨC KHỎE</a></b></span>
        <span class="color-white border-bottom-2" >______________________________________________________________</span><br><br>
        <b class="color-blue padding-left-12"><a href=""><?= h($new->name) ?></a></b><br><br>
        <div class="col-md-6 pull-left">
                           <?= $this->Html->image($new->image,['style="width:100%;padding-top:10px;"']) ?>
        </div>
        <div class="col-md-6 pull-right">
            <p class="padding-left-10"><?= h($new->description) ?> </p>
        </div>
        <span class="color-rgba-tb" >_______________________________________________________________</span><br>

        <span class="color-blue"><b class="font-size-40 padding-left-20">.</b></span><a href="#">Nguy cơ ngộ độc do dùng tủ lạnh sai cách</a><br>
        <span class="color-blue"><b class="font-size-40 padding-left-20">.</b></span><a href="#">Thực phẩm không nên ăn vào buổi tối</a><br>
        <span class="color-blue"><b class="font-size-40 padding-left-20">.</b></span><a href="#">Giảm cân hiệu quả bằng cách uống nước</a>      
    </div>
    <div class="col-md-4 pull-right">
        <img src="assets\images\icon_ct10.png" style="width: 100%;"/>
        <h4 class="color-blue"><a href="">QUY TRÌNH SẢN XUẤT</a></h4>
        <p>Đạt tiêu chuẩn WHO-GMP,GMP,GLP,GSP và chủ trương thành phố di dời các cơ sở sản xuất ra khỏi nội thành,công ty đã tiến hành đầu tư nhà máy mới trên tổng diện tích 10.200m2 tại số 930 C2 đường C khu công nghiệp cắt lái II,P.thành mỹ lợi,từ năm 2003 thực hiện chủ trương của bộ y tế,tất cả nhà sản xuất dược phẩm phải Q2,thành phố Hồ Chí Minh.</p>

    </div>
<?php endforeach; ?>                      



</div>





