<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logon".
 *
 * @property int $REGISTRO
 * @property int $MAQUINA
 * @property string $USUARIO
 * @property string $DATA
 * @property int $TEMPO
 * @property int $ID
 * @property string $IP
 * @property string $NOME_MAQUINA
 * @property int $EXCLUIDO
 */
class Logon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MAQUINA', 'TEMPO', 'ID', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
            [['USUARIO', 'NOME_MAQUINA'], 'string', 'max' => 50],
            [['IP'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'MAQUINA' => 'Maquina',
            'USUARIO' => 'Usuario',
            'DATA' => 'Data',
            'TEMPO' => 'Tempo',
            'ID' => 'ID',
            'IP' => 'Ip',
            'NOME_MAQUINA' => 'Nome  Maquina',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
