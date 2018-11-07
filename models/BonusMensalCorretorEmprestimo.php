<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_mensal_corretor_emprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $BONUS
 * @property int $CORRETOR
 * @property double $VALOR_BONUS
 * @property string $DATA_REPASSE
 * @property string $USUARIO_REPASSE
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusMensalCorretorEmprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_mensal_corretor_emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'BONUS', 'CORRETOR', 'EXCLUIDO'], 'integer'],
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
            'CORRETOR' => 'Corretor',
            'VALOR_BONUS' => 'Valor  Bonus',
            'DATA_REPASSE' => 'Data  Repasse',
            'USUARIO_REPASSE' => 'Usuario  Repasse',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
