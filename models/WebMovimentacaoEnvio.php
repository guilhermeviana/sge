<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_movimentacao_envio".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property string $CHAVE_SEGURANCA
 * @property int $PARCEIRO
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property int $TIPO_PRODUTO
 * @property string $LOJA
 * @property string $TELEFONE_LOJA
 * @property string $ATENDENTE
 * @property string $EMAIL_LOJA
 * @property string $DESCRICAO
 * @property double $VALOR_SOLICITADO
 * @property string $DATA_REGISTRO
 * @property int $ANALISTA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class WebMovimentacaoEnvio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_movimentacao_envio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'PARCEIRO', 'CORRETOR', 'CLIENTE', 'TIPO_PRODUTO', 'ANALISTA', 'EXCLUIDO'], 'integer'],
            [['VALOR_SOLICITADO'], 'number'],
            [['DATA_REGISTRO'], 'safe'],
            [['CHAVE_SEGURANCA', 'LOJA', 'ATENDENTE', 'USUARIO'], 'string', 'max' => 50],
            [['TELEFONE_LOJA'], 'string', 'max' => 10],
            [['EMAIL_LOJA', 'DESCRICAO'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATIVO' => 'Ativo',
            'CHAVE_SEGURANCA' => 'Chave  Seguranca',
            'PARCEIRO' => 'Parceiro',
            'CORRETOR' => 'Corretor',
            'CLIENTE' => 'Cliente',
            'TIPO_PRODUTO' => 'Tipo  Produto',
            'LOJA' => 'Loja',
            'TELEFONE_LOJA' => 'Telefone  Loja',
            'ATENDENTE' => 'Atendente',
            'EMAIL_LOJA' => 'Email  Loja',
            'DESCRICAO' => 'Descricao',
            'VALOR_SOLICITADO' => 'Valor  Solicitado',
            'DATA_REGISTRO' => 'Data  Registro',
            'ANALISTA' => 'Analista',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
