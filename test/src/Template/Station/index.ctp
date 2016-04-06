<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Station'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="station index large-9 medium-8 columns content">
    <h3><?= __('Station') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('sta_id') ?></th>
                <th><?= $this->Paginator->sort('sta_nom') ?></th>
                <th><?= $this->Paginator->sort('sta_altitude') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($station as $station): ?>
            <tr>
                <td><?= $this->Number->format($station->sta_id) ?></td>
                <td><?= h($station->sta_nom) ?></td>
                <td><?= $this->Number->format($station->sta_altitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $station->sta_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $station->sta_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $station->sta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $station->sta_id)]) ?>
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
