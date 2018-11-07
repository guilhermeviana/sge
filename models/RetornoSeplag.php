<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retorno_seplag".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $DATA
 * @property int $REGISTRO_ARQUIVO
 * @property int $CLIENTE
 * @property int $DESCONTO
 * @property double $VALOR
 * @property string $RETORNO
 * @property int $MES
 * @property int $ANO
 * @property double $COMISSAO
 * @property double $VALOR_COMISSAO
 */
class RetornoSeplag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retorno_seplag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'REGISTRO_ARQUIVO', 'CLIENTE', 'DESCONTO', 'MES', 'ANO'], 'integer'],
            [['DATA'], 'safe'],
            [['VALOR', 'COMISSAO', 'VALOR_COMISSAO'], 'number'],
            [['RETORNO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO' => 'Tipo',
            'DATA' => 'Data',
            'REGISTRO_ARQUIVO' => 'Registro  Arquivo',
            'CLIENTE' => 'Cliente',
            'DESCONTO' => 'Desconto',
            'VALOR' => 'Valor',
            'RETORNO' => 'Retorno',
            'MES' => 'Mes',
            'ANO' => 'Ano',
            'COMISSAO' => 'Comissao',
            'VALOR_COMISSAO' => 'Valor  Comissao',
        ];
    }
}
