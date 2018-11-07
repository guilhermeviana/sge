<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corretor_parceiros_sub_estabelecidos".
 *
 * @property int $CORRETOR
 * @property int $PARCEIRO
 */
class CorretorParceirosSubEstabelecidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'corretor_parceiros_sub_estabelecidos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'PARCEIRO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CORRETOR' => 'Corretor',
            'PARCEIRO' => 'Parceiro',
        ];
    }
}
