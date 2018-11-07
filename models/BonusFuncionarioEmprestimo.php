<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_funcionario_emprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $BONUS
 * @property int $FUNCIONARIO
 * @property double $VALOR_BONUS
 * @property string $DATA_REPASSE
 * @property string $USUARIO_REPASSE
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusFuncionarioEmprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_funcionario_emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'BONUS', 'FUNCIONARIO', 'EXCLUIDO'], 'integer'],
            [['VALOR_BONUS'], 'number'],
            [['DATA_REPASSE', 'DATA_REGISTRO'], 'safe'],
            [['USUARIO_REPASSE', 'USUARIO'], 'string', 'max' => 50],
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
            'FUNCIONARIO' => 'Funcionario',
            'VALOR_BONUS' => 'Valor  Bonus',
            'DATA_REPASSE' => 'Data  Repasse',
            'USUARIO_REPASSE' => 'Usuario  Repasse',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
