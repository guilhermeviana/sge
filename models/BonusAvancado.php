<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_avancado".
 *
 * @property int $REGISTRO
 * @property int $BONUS
 * @property string $TABELA
 * @property string $CAMPO
 * @property string $TIPO_CAMPO
 * @property string $COMPARATIVO
 * @property string $VALOR_1
 * @property string $VALOR_2
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusAvancado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_avancado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BONUS', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['TABELA', 'CAMPO', 'USUARIO'], 'string', 'max' => 50],
            [['TIPO_CAMPO'], 'string', 'max' => 1],
            [['COMPARATIVO'], 'string', 'max' => 20],
            [['VALOR_1', 'VALOR_2'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'BONUS' => 'Bonus',
            'TABELA' => 'Tabela',
            'CAMPO' => 'Campo',
            'TIPO_CAMPO' => 'Tipo  Campo',
            'COMPARATIVO' => 'Comparativo',
            'VALOR_1' => 'Valor 1',
            'VALOR_2' => 'Valor 2',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
