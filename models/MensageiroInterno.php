<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mensageiro_interno".
 *
 * @property int $REGISTRO
 * @property string $VISUALIZADO
 * @property string $MENSAGEM
 * @property string $USUARIO
 * @property string $USUARIO_REGISTRO
 * @property string $DATA
 * @property string $DATA_REGISTRO
 * @property int $EXCLUIDO
 */
class MensageiroInterno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mensageiro_interno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['VISUALIZADO', 'DATA', 'DATA_REGISTRO'], 'safe'],
            [['MENSAGEM'], 'string'],
            [['EXCLUIDO'], 'integer'],
            [['USUARIO', 'USUARIO_REGISTRO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'VISUALIZADO' => 'Visualizado',
            'MENSAGEM' => 'Mensagem',
            'USUARIO' => 'Usuario',
            'USUARIO_REGISTRO' => 'Usuario  Registro',
            'DATA' => 'Data',
            'DATA_REGISTRO' => 'Data  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
