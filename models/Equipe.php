<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipe".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property int $EXCLUIDO
 */
class Equipe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DESCRICAO' => 'Descricao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
