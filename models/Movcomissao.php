<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movcomissao".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $CORRETOR
 * @property int $CORRETOR_1
 * @property int $CORRETOR_2
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property double $COMISSAO
 * @property double $VALOR_POR_CONTRATO
 * @property double $PORCENTAGEM_PAG_TAC
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movcomissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movcomissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CORRETOR', 'CORRETOR_1', 'CORRETOR_2', 'PRODUTO', 'CATEGORIA', 'REGRA', 'EXCLUIDO'], 'integer'],
            [['COMISSAO', 'VALOR_POR_CONTRATO', 'PORCENTAGEM_PAG_TAC'], 'number'],
            [['DATA'], 'safe'],
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
            'TIPO' => 'Tipo',
            'CORRETOR' => 'Corretor',
            'CORRETOR_1' => 'Corretor 1',
            'CORRETOR_2' => 'Corretor 2',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'COMISSAO' => 'Comissao',
            'VALOR_POR_CONTRATO' => 'Valor  Por  Contrato',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
