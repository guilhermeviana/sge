<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cp_solicitacao_recurso".
 *
 * @property int $REGISTRO
 * @property int $FILIAL
 * @property string $HISTORICO
 * @property string $EMISSAO
 * @property string $RECEBIMENTO_NOTA
 * @property string $VENCIMENTO
 * @property double $VALOR_TOTAL
 * @property double $VALOR_PAGO
 * @property string $PAGAMENTO
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATATREGISTRO
 * @property int $EXCLUIDO
 */
class CpSolicitacaoRecurso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp_solicitacao_recurso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FILIAL', 'EXCLUIDO'], 'integer'],
            [['EMISSAO', 'RECEBIMENTO_NOTA', 'VENCIMENTO', 'PAGAMENTO', 'DATATREGISTRO'], 'safe'],
            [['VALOR_TOTAL', 'VALOR_PAGO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['HISTORICO'], 'string', 'max' => 100],
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
            'FILIAL' => 'Filial',
            'HISTORICO' => 'Historico',
            'EMISSAO' => 'Emissao',
            'RECEBIMENTO_NOTA' => 'Recebimento  Nota',
            'VENCIMENTO' => 'Vencimento',
            'VALOR_TOTAL' => 'Valor  Total',
            'VALOR_PAGO' => 'Valor  Pago',
            'PAGAMENTO' => 'Pagamento',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATATREGISTRO' => 'Datatregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
