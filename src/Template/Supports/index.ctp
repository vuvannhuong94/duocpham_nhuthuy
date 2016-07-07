<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Support'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="supports index large-9 medium-8 columns content">
    <h3><?= __('Supports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supports as $support): ?>
            <tr>
                <td><?= $this->Number->format($support->id) ?></td>
                <td><?= h($support->name) ?></td>
                <td><?= h($support->value) ?></td>
                <td><?= h($support->type) ?></td>
                <td><?= h($support->created) ?></td>
                <td><?= h($support->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $support->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $support->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
