<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Node Entity
 *
 * @property int $node_id
 * @property string $title
 * @property string $description
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property int $level
 * @property int $display_order
 * @property string $type
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Node $node
 * @property \App\Model\Entity\Node $parent_node
 * @property \App\Model\Entity\Node[] $child_nodes
 */
class Node extends Entity
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
        '*' => true,
        'node_id' => false
    ];
}
