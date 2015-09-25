<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cambio'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="cambios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('donde') ?></th>
            <th><?= $this->Paginator->sort('ahora') ?></th>
            <th><?= $this->Paginator->sort('despues') ?></th>
            <th><?= $this->Paginator->sort('fechaRegistro') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cambios as $cambio): ?>
        <tr>
            <td><?= $this->Number->format($cambio->id) ?></td>
            <td><?= h($cambio->donde) ?></td>
            <td><?= h($cambio->ahora) ?></td>
            <td><?= h($cambio->despues) ?></td>
            <td><?= h($cambio->fechaRegistro) ?></td>
            <td><?= h($cambio->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cambio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cambio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cambio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cambio->id)]) ?>
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
