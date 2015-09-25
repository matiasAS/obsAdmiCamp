<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $errore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $errore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Errores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="errores form large-10 medium-9 columns">
    <?= $this->Form->create($errore) ?>
    <fieldset>
        <legend><?= __('Edit Errore') ?></legend>
        <?php
            echo $this->Form->input('donde',['label'=>'Donde']);
            echo $this->Form->input('haciendoque',['label'=>'Haciendo que']);
            echo $this->Form->input('tipoerror',['label'=>'Tipo de error']);
            echo $this->Form->input('fechaRegistro',['label'=>'Fecha registro']);
            echo $this->Form->input('estado',['label'=>'Estado']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
