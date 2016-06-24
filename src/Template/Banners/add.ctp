<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Banner') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('image',['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
