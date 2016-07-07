<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $connection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Connections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="connections form large-9 medium-8 columns content">
    <?= $this->Form->create($connection) ?>
    <fieldset>
        <legend><?= __('Edit Connection') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
