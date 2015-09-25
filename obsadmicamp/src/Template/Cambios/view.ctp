<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cambio'), ['action' => 'edit', $cambio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cambio'), ['action' => 'delete', $cambio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cambio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cambios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cambio'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cambios view large-10 medium-9 columns">
    <h2><?= h($cambio->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cambio->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('FechaRegistro') ?></h6>
            <p><?= h($cambio->fechaRegistro) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Donde') ?></h6>
            <?= $this->Text->autoParagraph(h($cambio->donde)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Ahora') ?></h6>
            <?= $this->Text->autoParagraph(h($cambio->ahora)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Despues') ?></h6>
            <?= $this->Text->autoParagraph(h($cambio->despues)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <?= $this->Text->autoParagraph(h($cambio->estado)) ?>
        </div>
    </div>
</div>
