<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       
   
        <li><?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="settings form large-9 medium-8 columns content">
    <?= $this->Form->create($setting,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Setting') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Html->image($setting->image);
            echo $this->Form->input('image',['type'=>'file']);
            echo $this->Form->input('address');
            echo $this->Form->input('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
