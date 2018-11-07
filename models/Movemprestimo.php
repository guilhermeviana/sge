<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movemprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property string $DESCRICAO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movemprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movemprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'EXCLUIDO'], 'integer'],
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
            'EMPRESTIMO' => 'Emprestimo',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
