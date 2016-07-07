<span class="color-blue font-size-17 "><b><a href=""><?=__('LIÊN HỆ')?> </a></b></span>
        <span class="color-white border-bottom-2" >_________________________________________________________________________________________________________    </span><br><br>
<div class="connections form large-9 medium-8 columns content">
   
    <?= $this->Form->create($connection); ?>
    <fieldset>
        <legend><?= __('Ý kiến của bạn') ?></legend>
        <?php
            echo $this->Form->input('name',['class'=>'form-control','placeholder'=>"họ và tên"]);
            echo $this->Form->input('email',['class'=>'form-control','placeholder'=>"địa chỉ email"]);
            echo $this->Form->input('title',['class'=>'form-control','placeholder'=>"tên tiêu đề"]);
            echo $this->Form->input('description',['class'=>'form-control','placeholder'=>"nội dung"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
   <?= $this->Flash->render();?>
</div>
