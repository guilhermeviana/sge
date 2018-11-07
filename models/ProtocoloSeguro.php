<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocolo_seguro".
 *
 * @property int $REGISTRO
 * @property int $ORIGEM
 * @property string $DATA_ENVIO
 * @property string $DATA_RECEBIMENTO
 * @property int $FORMA_ENVIO
 * @property int $FORMA_RECEBIMENTO
 * @property string $CONTRATO
 * @property string $ADESAO
 * @property string $COD_BARRAS_CONTRATO
 * @property int $CORRETOR
 * @property int $REMETENTE_DESTINATARIO
 * @property string $CPF
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $TELEFONE
 * @property string $CELULAR
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $VALOR_EMPRESTADO
 * @property int $PARCELAS
 * @property double $VALOR_PRESTACAO
 * @property int $ANALISTA
 * @property int $TELEFONISTA
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATA_REGISTRO
 * @property int $EXCLUIDO
 */
class ProtocoloSeguro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'protocolo_seguro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORIGEM', 'FORMA_ENVIO', 'FORMA_RECEBIMENTO', 'CORRETOR', 'REMETENTE_DESTINATARIO', 'PRODUTO', 'CATEGORIA', 'PARCELAS', 'ANALISTA', 'TELEFONISTA', 'EXCLUIDO'], 'integer'],
            [['DATA_ENVIO', 'DATA_RECEBIMENTO', 'NASCIMENTO', 'DATA_REGISTRO'], 'safe'],
            [['VALOR_EMPRESTADO', 'VALOR_PRESTACAO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['CONTRATO', 'ADESAO', 'COD_BARRAS_CONTRATO'], 'string', 'max' => 15],
            [['CPF'], 'string', 'max' => 14],
            [['NOME', 'USUARIO'], 'string', 'max' => 50],
            [['TELEFONE', 'CELULAR'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ORIGEM' => 'Origem',
            'DATA_ENVIO' => 'Data  Envio',
            'DATA_RECEBIMENTO' => 'Data  Recebimento',
            'FORMA_ENVIO' => 'Forma  Envio',
            'FORMA_RECEBIMENTO' => 'Forma  Recebimento',
            'CONTRATO' => 'Contrato',
            'ADESAO' => 'Adesao',
            'COD_BARRAS_CONTRATO' => 'Cod  Barras  Contrato',
            'CORRETOR' => 'Corretor',
            'REMETENTE_DESTINATARIO' => 'Remetente  Destinatario',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'TELEFONE' => 'Telefone',
            'CELULAR' => 'Celular',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'VALOR_EMPRESTADO' => 'Valor  Emprestado',
            'PARCELAS' => 'Parcelas',
            'VALOR_PRESTACAO' => 'Valor  Prestacao',
            'ANALISTA' => 'Analista',
            'TELEFONISTA' => 'Telefonista',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATA_REGISTRO' => 'Data  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
