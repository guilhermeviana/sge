<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_fator_consulta".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $PRAZO
 * @property double $FATOR
 */
class WebFatorConsulta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_fator_consulta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'PRAZO'], 'integer'],
            [['FATOR'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PRODUTO' => 'Produto',
            'PRAZO' => 'Prazo',
            'FATOR' => 'Fator',
        ];
    }
}
