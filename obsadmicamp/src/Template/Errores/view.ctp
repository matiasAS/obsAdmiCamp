<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Errore'), ['action' => 'edit', $errore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Errore'), ['action' => 'delete', $errore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $errore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Errores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Errore'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="errores view large-10 medium-9 columns">
    <h2><?= h($errore->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($errore->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('FechaRegistro') ?></h6>
            <p><?= h($errore->fechaRegistro) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Donde') ?></h6>
            <?= $this->Text->autoParagraph(h($errore->donde)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Haciendoque') ?></h6>
            <?= $this->Text->autoParagraph(h($errore->haciendoque)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Tipoerror') ?></h6>
            <?= $this->Text->autoParagraph(h($errore->tipoerror)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <?= $this->Text->autoParagraph(h($errore->estado)) ?>
        </div>
    </div>
</div>
