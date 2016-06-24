<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
        <?php
            echo $this->Html->image($banner->image);
            echo $this->Form->input('name');
            echo $this->Form->input('image',['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
