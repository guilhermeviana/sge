<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sisdeb_debito_avulso".
 *
 * @property int $REGISTRO
 * @property string $ID_EMPRESA
 * @property string $ID_REMESSA
 * @property string $ID_RETORNO
 * @property string $ID_DEBITO
 * @property int $NSA_REMESSA_BANCO
 * @property int $NSA_REMESSA
 * @property int $CONTA_REMESSA
 * @property int $CONTA_CLIENTE
 * @property int $CLIENTE
 * @property string $IDENTIFICADOR_CLIENTE
 * @property string $IDENTIFICADOR_DEBITO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $DIG_CONTA
 * @property double $VALOR_TAXA
 * @property double $VALOR_PARCELA
 * @property double $VALOR
 * @property double $VALOR_PAGO
 * @property string $VENCIMENTO
 * @property string $PAGAMENTO
 * @property int $STATUS
 * @property int $VENCIMENTO_FILTRO_1
 * @property int $VENCIMENTO_FILTRO_2
 * @property string $DESCRICAO_RETORNO
 * @property string $DATA_RETORNO
 * @property string $USUARIO_RETORNO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class SisdebDebitoAvulso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisdeb_debito_avulso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NSA_REMESSA_BANCO', 'NSA_REMESSA', 'CONTA_REMESSA', 'CONTA_CLIENTE', 'CLIENTE', 'STATUS', 'VENCIMENTO_FILTRO_1', 'VENCIMENTO_FILTRO_2', 'EXCLUIDO'], 'integer'],
            [['VALOR_TAXA', 'VALOR_PARCELA', 'VALOR', 'VALOR_PAGO'], 'number'],
            [['VENCIMENTO', 'PAGAMENTO', 'DATA_RETORNO', 'DATA_REGISTRO'], 'safe'],
            [['ID_EMPRESA', 'ID_REMESSA', 'ID_RETORNO', 'ID_DEBITO'], 'string', 'max' => 36],
            [['IDENTIFICADOR_CLIENTE', 'IDENTIFICADOR_DEBITO', 'USUARIO_RETORNO', 'USUARIO'], 'string', 'max' => 50],
            [['AGENCIA'], 'string', 'max' => 6],
            [['CONTA'], 'string', 'max' => 15],
            [['DIG_CONTA'], 'string', 'max' => 1],
            [['DESCRICAO_RETORNO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ID_EMPRESA' => 'Id  Empresa',
            'ID_REMESSA' => 'Id  Remessa',
            'ID_RETORNO' => 'Id  Retorno',
            'ID_DEBITO' => 'Id  Debito',
            'NSA_REMESSA_BANCO' => 'Nsa  Remessa  Banco',
            'NSA_REMESSA' => 'Nsa  Remessa',
            'CONTA_REMESSA' => 'Conta  Remessa',
            'CONTA_CLIENTE' => 'Conta  Cliente',
            'CLIENTE' => 'Cliente',
            'IDENTIFICADOR_CLIENTE' => 'Identificador  Cliente',
            'IDENTIFICADOR_DEBITO' => 'Identificador  Debito',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'DIG_CONTA' => 'Dig  Conta',
            'VALOR_TAXA' => 'Valor  Taxa',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'VALOR' => 'Valor',
            'VALOR_PAGO' => 'Valor  Pago',
            'VENCIMENTO' => 'Vencimento',
            'PAGAMENTO' => 'Pagamento',
            'STATUS' => 'Status',
            'VENCIMENTO_FILTRO_1' => 'Vencimento  Filtro 1',
            'VENCIMENTO_FILTRO_2' => 'Vencimento  Filtro 2',
            'DESCRICAO_RETORNO' => 'Descricao  Retorno',
            'DATA_RETORNO' => 'Data  Retorno',
            'USUARIO_RETORNO' => 'Usuario  Retorno',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
