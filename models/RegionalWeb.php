<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regional_web".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $REGIONAL
 * @property int $EXCLUIDO
 */
class RegionalWeb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regional_web';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['REGIONAL'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRETOR' => 'Corretor',
            'REGIONAL' => 'Regional',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
