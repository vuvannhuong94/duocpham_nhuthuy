<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Footer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="footers index large-9 medium-8 columns content">
    <h3><?= __('Footers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('fax') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footers as $footer): ?>
            <tr>
                <td><?= $this->Number->format($footer->id) ?></td>
                <td><?= h($footer->name) ?></td>
                <td><?= h($footer->phone) ?></td>
                <td><?= h($footer->fax) ?></td>
                <td><?= h($footer->created) ?></td>
                <td><?= h($footer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $footer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footer->id)]) ?>
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
