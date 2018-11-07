<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_mov_bancario".
 *
 * @property int $REGISTRO
 * @property int $CONTA
 * @property string $DESCRICAO
 * @property string $DATA
 * @property double $VALOR
 * @property int $ENTRADA
 * @property string $DATAREG
 * @property string $USUARIO
 */
class FinMovBancario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_mov_bancario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CONTA', 'ENTRADA'], 'integer'],
            [['DATA', 'DATAREG'], 'safe'],
            [['VALOR'], 'number'],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CONTA' => 'Conta',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'ENTRADA' => 'Entrada',
            'DATAREG' => 'Datareg',
            'USUARIO' => 'Usuario',
        ];
    }
}
