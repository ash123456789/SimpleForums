<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Thread[]|\Cake\Collection\CollectionInterface $threads
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Thread'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nodes'), ['controller' => 'Nodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Node'), ['controller' => 'Nodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="threads index large-9 medium-8 columns content">
    <h3><?= __('Threads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('thread_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('node_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($threads as $thread): ?>
            <tr>
                <td><?= $thread->has('thread') ? $this->Html->link($thread->thread->title, ['controller' => 'Threads', 'action' => 'view', $thread->thread->thread_id]) : '' ?></td>
                <td><?= $thread->has('node') ? $this->Html->link($thread->node->title, ['controller' => 'Nodes', 'action' => 'view', $thread->node->node_id]) : '' ?></td>
                <td><?= $this->Number->format($thread->user_id) ?></td>
                <td><?= h($thread->created) ?></td>
                <td><?= h($thread->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $thread->thread_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thread->thread_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thread->thread_id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->thread_id)]) ?>
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
