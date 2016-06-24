<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
</nav>
<div class="settings index large-9 medium-8 columns content">
    <h3><?= __('Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($settings as $setting): ?>
            <tr>
                <td><?= $this->Number->format($setting->id) ?></td>
                <td><?= h($setting->name) ?></td>
               <td><?= $this->Html->image($setting->image) ?></td>
                <td><?= h($setting->address) ?></td>
                <td><?= h($setting->phone) ?></td>
                <td><?= h($setting->created) ?></td>
                <td><?= h($setting->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $setting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setting->id]) ?>
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
