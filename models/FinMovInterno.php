<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_mov_interno".
 *
 * @property int $REGISTRO
 * @property int $PARCELA
 * @property string $DESCRICAO
 * @property string $DATA
 * @property double $VALOR
 * @property int $ENTRADA
 * @property string $DATAREG
 * @property string $USUARIO
 */
class FinMovInterno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_mov_interno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCELA', 'ENTRADA'], 'integer'],
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
            'PARCELA' => 'Parcela',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'ENTRADA' => 'Entrada',
            'DATAREG' => 'Datareg',
            'USUARIO' => 'Usuario',
        ];
    }
}
