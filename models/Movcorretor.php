<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movcorretor".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $DESCRICAO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movcorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movcorretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
            [['DESCRICAO'], 'string', 'max' => 255],
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
            'CORRETOR' => 'Corretor',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
