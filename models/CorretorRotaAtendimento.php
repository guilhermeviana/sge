<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corretor_rota_atendimento".
 *
 * @property int $CORRETOR
 * @property int $ROTA_ATENDIMENTO
 */
class CorretorRotaAtendimento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'corretor_rota_atendimento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'ROTA_ATENDIMENTO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CORRETOR' => 'Corretor',
            'ROTA_ATENDIMENTO' => 'Rota  Atendimento',
        ];
    }
}
