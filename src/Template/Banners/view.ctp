<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banner'), ['action' => 'edit', $banner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banner'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banners view large-9 medium-8 columns content">
    <h3><?= h($banner->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($banner->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($banner->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($banner->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($banner->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($banner->modified) ?></td>
        </tr>
    </table>
</div>
