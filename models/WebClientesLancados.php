<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_clientes_lancados".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $CORRETOR
 * @property string $DATAREGISTRO
 */
class WebClientesLancados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_clientes_lancados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'CORRETOR'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'CORRETOR' => 'Corretor',
            'DATAREGISTRO' => 'Dataregistro',
        ];
    }
}
