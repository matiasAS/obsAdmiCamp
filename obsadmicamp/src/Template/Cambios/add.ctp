<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cambios'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cambios form large-10 medium-9 columns">
    <?= $this->Form->create($cambio) ?>
    <fieldset>
        <legend><?= __('Add Cambio') ?></legend>
        <?php
            echo $this->Form->input('donde',['label'=>'Donde']);
            echo $this->Form->input('ahora',['label'=>'Antes del cambio']);
            echo $this->Form->input('despues',['label'=>'Como tiene que quedar']);
            echo $this->Form->input('fechaRegistro',['label'=>'Fecha de registro']);
            echo $this->Form->input('estado',['label'=>'Estado']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
