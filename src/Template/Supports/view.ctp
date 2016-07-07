<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Support'), ['action' => 'edit', $support->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Support'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Support'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="supports view large-9 medium-8 columns content">
    <h3><?= h($support->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($support->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($support->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($support->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($support->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($support->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($support->modified) ?></td>
        </tr>
    </table>
</div>
