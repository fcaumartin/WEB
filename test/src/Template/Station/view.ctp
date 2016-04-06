<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Station'), ['action' => 'edit', $station->sta_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Station'), ['action' => 'delete', $station->sta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $station->sta_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Station'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Station'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="station view large-9 medium-8 columns content">
    <h3><?= h($station->sta_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sta Nom') ?></th>
            <td><?= h($station->sta_nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Sta Id') ?></th>
            <td><?= $this->Number->format($station->sta_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sta Altitude') ?></th>
            <td><?= $this->Number->format($station->sta_altitude) ?></td>
        </tr>
    </table>
</div>
