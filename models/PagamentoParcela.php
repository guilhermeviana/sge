<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagamento_parcela".
 *
 * @property int $REGISTRO
 * @property int $PARCELA
 * @property int $NEGOCIACAO_EMPRESTIMO
 * @property int $MOTIVO_PAGAMENTO
 * @property int $FORMA_PAGAMENTO
 * @property string $DATA
 * @property double $VALOR
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class PagamentoParcela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamento_parcela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCELA', 'NEGOCIACAO_EMPRESTIMO', 'MOTIVO_PAGAMENTO', 'FORMA_PAGAMENTO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['VALOR'], 'number'],
            [['OBSERVACAO'], 'string'],
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
            'PARCELA' => 'Parcela',
            'NEGOCIACAO_EMPRESTIMO' => 'Negociacao  Emprestimo',
            'MOTIVO_PAGAMENTO' => 'Motivo  Pagamento',
            'FORMA_PAGAMENTO' => 'Forma  Pagamento',
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
