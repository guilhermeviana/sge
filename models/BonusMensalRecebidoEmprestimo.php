<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_mensal_recebido_emprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $BONUS
 * @property double $VALOR_BONUS
 * @property string $DATA_RECEBIMENTO
 * @property string $USUARIO_RECEBIMENTO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusMensalRecebidoEmprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_mensal_recebido_emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'BONUS', 'EXCLUIDO'], 'integer'],
            [['VALOR_BONUS'], 'number'],
            [['DATA_RECEBIMENTO', 'DATA_REGISTRO'], 'safe'],
            [['USUARIO_RECEBIMENTO', 'USUARIO'], 'string', 'max' => 50],
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
            'BONUS' => 'Bonus',
            'VALOR_BONUS' => 'Valor  Bonus',
            'DATA_RECEBIMENTO' => 'Data  Recebimento',
            'USUARIO_RECEBIMENTO' => 'Usuario  Recebimento',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
