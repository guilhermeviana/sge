<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_outros".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $ITENS_OUTROS
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaOutros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_outros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'EXCLUIDO'], 'integer'],
            [['ITENS_OUTROS'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'ITENS_OUTROS' => 'Itens  Outros',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
