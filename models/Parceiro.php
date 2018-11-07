<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parceiro".
 *
 * @property int $REGISTRO
 * @property string $RAZAO_SOCIAL
 * @property string $ABREVIACAO
 * @property string $CPFCNPJ
 * @property string $IESTADUAL
 * @property string $TELEFONE_COM
 * @property string $TELEFONE_FAX
 * @property string $TELEFONE_CON
 * @property string $CONTATO
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $OBSERVACAO
 * @property string $LOGOTIPO
 * @property int $EMPRESA
 * @property int $ALERTA_RECOMPRAS
 * @property int $PLANO_CONTAS
 * @property int $FORCA_DIG_NUM_CONTRATO
 * @property int $NUM_CARACTERES
 * @property int $CONTA_TRANSFERENCIA_COMISSAO
 * @property string $EMAIL_COMERCIAL
 * @property string $EMAIL_FISCAL
 * @property string $EMAIL_COMISSIONAMENTO
 * @property int $EXCLUIDO
 */
class Parceiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parceiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO', 'COMPLEMENTO'], 'string'],
            [['EMPRESA', 'ALERTA_RECOMPRAS', 'PLANO_CONTAS', 'FORCA_DIG_NUM_CONTRATO', 'NUM_CARACTERES', 'CONTA_TRANSFERENCIA_COMISSAO', 'EXCLUIDO', 'NUMERO'], 'integer'],
            [['RAZAO_SOCIAL', 'CONTATO', 'ENDERECO'], 'string', 'max' => 100],
            [['ABREVIACAO', 'BAIRRO', 'CIDADE'], 'string', 'max' => 50],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IESTADUAL'], 'string', 'max' => 15],
            [['TELEFONE_COM', 'TELEFONE_FAX', 'TELEFONE_CON'], 'string', 'max' => 15],
            [['UF'], 'string', 'max' => 2],
            [['CEP'], 'string', 'max' => 10],
            [['LOGOTIPO', 'EMAIL_COMERCIAL', 'EMAIL_FISCAL', 'EMAIL_COMISSIONAMENTO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'RAZAO_SOCIAL' => 'Razão  Social',
            'ABREVIACAO' => 'Abreviação',
            'CPFCNPJ' => 'CPF/CNPJ',
            'IESTADUAL' => 'I. Estadual',
            'TELEFONE_COM' => 'Telefone Comercial',
            'TELEFONE_FAX' => 'Fax',
            'TELEFONE_CON' => 'Telefone 2',
            'CONTATO' => 'E-mail    ',
            'ENDERECO' => 'Endereço',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'UF',
            'CEP' => 'CEP',
            'OBSERVACAO' => 'Observação',
            'LOGOTIPO' => 'Logotipo',
            'EMPRESA' => 'Empresa',
            'ALERTA_RECOMPRAS' => 'Alerta  Recompras',
            'PLANO_CONTAS' => 'Plano  Contas',
            'FORCA_DIG_NUM_CONTRATO' => 'Forca  Dig  Num  Contrato',
            'NUM_CARACTERES' => 'Num  Caracteres',
            'CONTA_TRANSFERENCIA_COMISSAO' => 'Conta  Transferencia  Comissao',
            'EMAIL_COMERCIAL' => 'Email  Comercial',
            'EMAIL_FISCAL' => 'Email  Fiscal',
            'EMAIL_COMISSIONAMENTO' => 'Email  Comissionamento',
            'EXCLUIDO' => 'Excluido',
            'NUMERO' => 'Número',
            'COMPLEMENTO' => 'Complemento'
        ];
    }
    
     public function getProdutos() {
        return $this->hasMany(Produtos::className(), ['REGISTRO' => 'PARCEIRO']);
    }

}
