<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Distribution'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="distributions index large-9 medium-8 columns content">
    <h3><?= __('Distributions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($distributions as $distribution): ?>
            <tr>
                <td><?= $this->Number->format($distribution->id) ?></td>
                <td><?= h($distribution->name) ?></td>
                <td><?= h($distribution->description) ?></td>
                <td><?= h($distribution->created) ?></td>
                <td><?= h($distribution->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $distribution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $distribution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $distribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distribution->id)]) ?>
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
