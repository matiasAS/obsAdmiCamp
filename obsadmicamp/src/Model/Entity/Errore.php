<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Errore Entity.
 *
 * @property int $id
 * @property string $donde
 * @property string $haciendoque
 * @property string $tipoerror
 * @property \Cake\I18n\Time $fechaRegistro
 * @property string $estado
 */
class Errore extends Entity
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
        'id' => false,
    ];
}
