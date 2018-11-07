<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desconto_comissao".
 *
 * @property int $REGISTRO
 * @property int $ORIGEM_OPERACAO
 * @property int $REGISTRO_BONUS_MENSAL
 * @property string $DATA_REFERENCIA_BONUS_MENSAL
 * @property double $VALOR_DESCONTO_REFERENCIA
 * @property int $DESCONTO_REFERENTE
 * @property int $TIPO_DESCONTO
 * @property int $CONTRATO
 * @property int $ESTADO
 * @property int $CORRETOR
 * @property string $DESCRICAO
 * @property string $DATA_DESCONTO
 * @property string $DATA_LIQUIDACAO
 * @property double $VALOR
 * @property double $DESCONTAR_PERCENTUAL
 * @property int $RECIBO_CORRETOR
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class DescontoComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desconto_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORIGEM_OPERACAO', 'REGISTRO_BONUS_MENSAL', 'DESCONTO_REFERENTE', 'TIPO_DESCONTO', 'CONTRATO', 'ESTADO', 'CORRETOR', 'RECIBO_CORRETOR', 'EXCLUIDO'], 'integer'],
            [['DATA_REFERENCIA_BONUS_MENSAL', 'DATA_DESCONTO', 'DATA_LIQUIDACAO', 'DATAREGISTRO'], 'safe'],
            [['VALOR_DESCONTO_REFERENCIA', 'VALOR', 'DESCONTAR_PERCENTUAL'], 'number'],
            [['DESCRICAO'], 'string', 'max' => 255],
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
            'ORIGEM_OPERACAO' => 'Origem  Operacao',
            'REGISTRO_BONUS_MENSAL' => 'Registro  Bonus  Mensal',
            'DATA_REFERENCIA_BONUS_MENSAL' => 'Data  Referencia  Bonus  Mensal',
            'VALOR_DESCONTO_REFERENCIA' => 'Valor  Desconto  Referencia',
            'DESCONTO_REFERENTE' => 'Desconto  Referente',
            'TIPO_DESCONTO' => 'Tipo  Desconto',
            'CONTRATO' => 'Contrato',
            'ESTADO' => 'Estado',
            'CORRETOR' => 'Corretor',
            'DESCRICAO' => 'Descricao',
            'DATA_DESCONTO' => 'Data  Desconto',
            'DATA_LIQUIDACAO' => 'Data  Liquidacao',
            'VALOR' => 'Valor',
            'DESCONTAR_PERCENTUAL' => 'Descontar  Percentual',
            'RECIBO_CORRETOR' => 'Recibo  Corretor',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
