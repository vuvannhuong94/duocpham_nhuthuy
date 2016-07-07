<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Connection'), ['action' => 'edit', $connection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Connection'), ['action' => 'delete', $connection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Connections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Connection'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="connections view large-9 medium-8 columns content">
    <h3><?= h($connection->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($connection->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($connection->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($connection->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($connection->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($connection->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($connection->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($connection->description)); ?>
    </div>
</div>
