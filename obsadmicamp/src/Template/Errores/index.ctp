<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Errore'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="errores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('donde') ?></th>
             <th><?= $this->Paginator->sort('haciendoque') ?></th>
              <th><?= $this->Paginator->sort('tipoerror') ?></th>
            <th><?= $this->Paginator->sort('fechaRegistro') ?></th>
             <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($errores as $errore): ?>
        <tr>
            <td><?= $this->Number->format($errore->id) ?></td>
            <td><?= h($errore->donde) ?></td>
            <td><?= h($errore->haciendoque) ?></td>
            <td><?= h($errore->tipoerror) ?></td>
            <td><?= h($errore->fechaRegistro) ?></td>
            <td><?= h($errore->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $errore->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $errore->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $errore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $errore->id)]) ?>
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
