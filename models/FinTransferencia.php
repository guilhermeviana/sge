<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_transferencia".
 *
 * @property int $REGISTRO
 * @property int $FILIAL_SAIDA
 * @property int $CONTA_SAIDA
 * @property int $CENTRO_CUSTOS_SAIDA
 * @property double $VALOR_SAIDA
 * @property string $DESCRICAO_SAIDA
 * @property int $FORMA_PAGAMENTO_SAIDA
 * @property string $DOCUMENTO_SAIDA
 * @property int $FILIAL_ENTRADA
 * @property int $CONTA_ENTRADA
 * @property int $CENTRO_CUSTOS_ENTRADA
 * @property double $VALOR_ENTRADA
 * @property string $DESCRICAO_ENTRADA
 * @property int $FORMA_PAGAMENTO_ENTRADA
 * @property string $DOCUMENTO_ENTRADA
 * @property string $DATA_REGISTRO
 * @property string $USUARIO_REGISTRO
 * @property int $EXCLUIDO
 */
class FinTransferencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_transferencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FILIAL_SAIDA', 'CONTA_SAIDA', 'CENTRO_CUSTOS_SAIDA', 'FORMA_PAGAMENTO_SAIDA', 'FILIAL_ENTRADA', 'CONTA_ENTRADA', 'CENTRO_CUSTOS_ENTRADA', 'FORMA_PAGAMENTO_ENTRADA', 'EXCLUIDO'], 'integer'],
            [['VALOR_SAIDA', 'VALOR_ENTRADA'], 'number'],
            [['DATA_REGISTRO'], 'safe'],
            [['DESCRICAO_SAIDA', 'DESCRICAO_ENTRADA'], 'string', 'max' => 255],
            [['DOCUMENTO_SAIDA', 'DOCUMENTO_ENTRADA'], 'string', 'max' => 20],
            [['USUARIO_REGISTRO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'FILIAL_SAIDA' => 'Filial  Saida',
            'CONTA_SAIDA' => 'Conta  Saida',
            'CENTRO_CUSTOS_SAIDA' => 'Centro  Custos  Saida',
            'VALOR_SAIDA' => 'Valor  Saida',
            'DESCRICAO_SAIDA' => 'Descricao  Saida',
            'FORMA_PAGAMENTO_SAIDA' => 'Forma  Pagamento  Saida',
            'DOCUMENTO_SAIDA' => 'Documento  Saida',
            'FILIAL_ENTRADA' => 'Filial  Entrada',
            'CONTA_ENTRADA' => 'Conta  Entrada',
            'CENTRO_CUSTOS_ENTRADA' => 'Centro  Custos  Entrada',
            'VALOR_ENTRADA' => 'Valor  Entrada',
            'DESCRICAO_ENTRADA' => 'Descricao  Entrada',
            'FORMA_PAGAMENTO_ENTRADA' => 'Forma  Pagamento  Entrada',
            'DOCUMENTO_ENTRADA' => 'Documento  Entrada',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO_REGISTRO' => 'Usuario  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
