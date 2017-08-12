<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Node[]|\Cake\Collection\CollectionInterface $nodes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Node'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nodes index large-9 medium-8 columns content">
    <h3><?= __('Nodes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('node_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('display_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nodes as $node): ?>
            <tr>
                <td><?= $node->has('node') ? $this->Html->link($node->node->title, ['controller' => 'Nodes', 'action' => 'view', $node->node->node_id]) : '' ?></td>
                <td><?= h($node->title) ?></td>
                <td><?= $node->has('parent_node') ? $this->Html->link($node->parent_node->title, ['controller' => 'Nodes', 'action' => 'view', $node->parent_node->node_id]) : '' ?></td>
                <td><?= $this->Number->format($node->level) ?></td>
                <td><?= $this->Number->format($node->display_order) ?></td>
                <td><?= h($node->type) ?></td>
                <td><?= h($node->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $node->node_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $node->node_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $node->node_id], ['confirm' => __('Are you sure you want to delete # {0}?', $node->node_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
