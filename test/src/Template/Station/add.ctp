<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Station'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="station form large-9 medium-8 columns content">
    <?= $this->Form->create($station) ?>
    <fieldset>
        <legend><?= __('Add Station') ?></legend>
        <?php
            echo $this->Form->input('sta_nom');
            echo $this->Form->input('sta_altitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
