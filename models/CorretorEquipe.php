<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corretor_equipe".
 *
 * @property int $CORRETOR
 * @property int $EQUIPE
 */
class CorretorEquipe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'corretor_equipe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EQUIPE'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CORRETOR' => 'Corretor',
            'EQUIPE' => 'Equipe',
        ];
    }
}
