<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "negociacao_emprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $CORRETOR_NEGOCIACAO
 * @property string $DATA_QUITACAO
 * @property double $DESCONTO_DIA
 * @property double $CALULO_QUITACAO
 * @property int $FORMA_PAGAMENTO
 * @property int $MOTIVO_PAGAMENTO
 * @property double $VALOR_DISPONIVEL_QUITACAO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class NegociacaoEmprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'negociacao_emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'CORRETOR_NEGOCIACAO', 'FORMA_PAGAMENTO', 'MOTIVO_PAGAMENTO', 'EXCLUIDO'], 'integer'],
            [['DATA_QUITACAO', 'DATA_REGISTRO'], 'safe'],
            [['DESCONTO_DIA', 'CALULO_QUITACAO', 'VALOR_DISPONIVEL_QUITACAO'], 'number'],
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
            'EMPRESTIMO' => 'Emprestimo',
            'CORRETOR_NEGOCIACAO' => 'Corretor  Negociacao',
            'DATA_QUITACAO' => 'Data  Quitacao',
            'DESCONTO_DIA' => 'Desconto  Dia',
            'CALULO_QUITACAO' => 'Calulo  Quitacao',
            'FORMA_PAGAMENTO' => 'Forma  Pagamento',
            'MOTIVO_PAGAMENTO' => 'Motivo  Pagamento',
            'VALOR_DISPONIVEL_QUITACAO' => 'Valor  Disponivel  Quitacao',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
