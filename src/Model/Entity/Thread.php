<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thread Entity
 *
 * @property int $thread_id
 * @property int $node_id
 * @property int $user_id
 * @property string $title
 * @property string $message
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property int $stickied
 *
 * @property \App\Model\Entity\Thread $thread
 * @property \App\Model\Entity\Node $node
 */
class Thread extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => false,
        'thread_id' => true
    ];
}
