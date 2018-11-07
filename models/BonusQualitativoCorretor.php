<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_qualitativo_corretor".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $CORRETOR
 * @property double $BONUS
 * @property double $VALOR_BONUS
 * @property string $DATA_REPASSE
 * @property string $USUARIO_REPASSE
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusQualitativoCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_qualitativo_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['BONUS', 'VALOR_BONUS'], 'number'],
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
            'CORRETOR' => 'Corretor',
            'BONUS' => 'Bonus',
            'VALOR_BONUS' => 'Valor  Bonus',
            'DATA_REPASSE' => 'Data  Repasse',
            'USUARIO_REPASSE' => 'Usuario  Repasse',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
