<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_propostas".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $CPF
 * @property string $NOME
 * @property int $PRODUTO
 * @property double $VALOR_EMPRESTADO
 * @property int $PARCELAS
 * @property double $VALOR_PRESTACAO
 * @property string $CONTRATO
 * @property string $ADESAO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaPropostas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_propostas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'PRODUTO', 'PARCELAS', 'EXCLUIDO'], 'integer'],
            [['VALOR_EMPRESTADO', 'VALOR_PRESTACAO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['CPF'], 'string', 'max' => 14],
            [['NOME'], 'string', 'max' => 50],
            [['CONTRATO', 'ADESAO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'PRODUTO' => 'Produto',
            'VALOR_EMPRESTADO' => 'Valor  Emprestado',
            'PARCELAS' => 'Parcelas',
            'VALOR_PRESTACAO' => 'Valor  Prestacao',
            'CONTRATO' => 'Contrato',
            'ADESAO' => 'Adesao',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
