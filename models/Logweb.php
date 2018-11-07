<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logweb".
 *
 * @property int $REGISTRO
 * @property int $AGENTE
 * @property string $DATA
 * @property string $IP
 */
class Logweb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logweb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AGENTE'], 'integer'],
            [['DATA'], 'safe'],
            [['IP'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'AGENTE' => 'Agente',
            'DATA' => 'Data',
            'IP' => 'Ip',
        ];
    }
}
