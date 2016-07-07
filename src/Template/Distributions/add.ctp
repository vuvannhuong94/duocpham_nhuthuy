<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Distributions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="distributions form large-9 medium-8 columns content">
    <?= $this->Form->create($distribution) ?>
    <fieldset>
        <legend><?= __('Add Distribution') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
