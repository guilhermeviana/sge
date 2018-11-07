<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retorno_desc_folha".
 *
 * @property int $REGISTRO
 * @property string $MD5
 * @property int $STATUS
 * @property int $TIPO
 * @property int $RUBRICA
 * @property int $REG_SEGURO
 * @property int $REG_TAXA_ADM
 * @property int $CLIENTE
 * @property string $ORGAO
 * @property int $DESCONTO
 * @property string $DESC_DESCONTO
 * @property string $DESC_RETORNO
 * @property double $VALOR
 * @property double $COMISSAO
 * @property double $VALOR_COMISSAO
 * @property int $MES
 * @property int $ANO
 * @property string $RESULTADO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 */
class RetornoDescFolha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retorno_desc_folha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'TIPO', 'RUBRICA', 'REG_SEGURO', 'REG_TAXA_ADM', 'CLIENTE', 'DESCONTO', 'MES', 'ANO'], 'integer'],
            [['VALOR', 'COMISSAO', 'VALOR_COMISSAO'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['MD5', 'DESC_DESCONTO', 'DESC_RETORNO', 'USUARIO'], 'string', 'max' => 50],
            [['ORGAO'], 'string', 'max' => 15],
            [['RESULTADO'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'MD5' => 'Md5',
            'STATUS' => 'Status',
            'TIPO' => 'Tipo',
            'RUBRICA' => 'Rubrica',
            'REG_SEGURO' => 'Reg  Seguro',
            'REG_TAXA_ADM' => 'Reg  Taxa  Adm',
            'CLIENTE' => 'Cliente',
            'ORGAO' => 'Orgao',
            'DESCONTO' => 'Desconto',
            'DESC_DESCONTO' => 'Desc  Desconto',
            'DESC_RETORNO' => 'Desc  Retorno',
            'VALOR' => 'Valor',
            'COMISSAO' => 'Comissao',
            'VALOR_COMISSAO' => 'Valor  Comissao',
            'MES' => 'Mes',
            'ANO' => 'Ano',
            'RESULTADO' => 'Resultado',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
        ];
    }
}
