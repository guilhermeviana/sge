<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "observacao_cliente".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property string $DATA
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ObservacaoCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'observacao_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['USUARIO'], 'string', 'max' => 50],
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
            'DATA' => 'Data',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
