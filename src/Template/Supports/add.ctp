<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Supports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="supports form large-9 medium-8 columns content">
    <?= $this->Form->create($support) ?>
    <fieldset>
        <legend><?= __('Add Support') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
