<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_protocolo_proposta".
 *
 * @property int $REGISTRO
 * @property int $LIGACAO_PROTOCOLO
 * @property int $SEQUENCIA
 * @property int $ENVIADO_GERENTE
 * @property int $REGISTRO_MOVIMENTACAO_WEB
 * @property int $CLIENTE
 * @property int $CORRETOR
 * @property string $DESCRICAO_PROPOSTA
 * @property int $PARCEIRO
 * @property int $TIPO_CONTA
 * @property string $BANCO
 * @property string $AGENCIA
 * @property string $OPERACAO
 * @property string $CONTA
 * @property int $PROTOCOLO_FECHADO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class WebProtocoloProposta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_protocolo_proposta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LIGACAO_PROTOCOLO', 'SEQUENCIA', 'ENVIADO_GERENTE', 'REGISTRO_MOVIMENTACAO_WEB', 'CLIENTE', 'CORRETOR', 'PARCEIRO', 'TIPO_CONTA', 'PROTOCOLO_FECHADO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO_PROPOSTA', 'USUARIO'], 'string', 'max' => 50],
            [['BANCO'], 'string', 'max' => 3],
            [['AGENCIA', 'OPERACAO'], 'string', 'max' => 6],
            [['CONTA'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'LIGACAO_PROTOCOLO' => 'Ligacao  Protocolo',
            'SEQUENCIA' => 'Sequencia',
            'ENVIADO_GERENTE' => 'Enviado  Gerente',
            'REGISTRO_MOVIMENTACAO_WEB' => 'Registro  Movimentacao  Web',
            'CLIENTE' => 'Cliente',
            'CORRETOR' => 'Corretor',
            'DESCRICAO_PROPOSTA' => 'Descricao  Proposta',
            'PARCEIRO' => 'Parceiro',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'OPERACAO' => 'Operacao',
            'CONTA' => 'Conta',
            'PROTOCOLO_FECHADO' => 'Protocolo  Fechado',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
