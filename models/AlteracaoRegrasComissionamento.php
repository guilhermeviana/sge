<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alteracao_regras_comissionamento".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class AlteracaoRegrasComissionamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alteracao_regras_comissionamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA'], 'safe'],
            [['EXCLUIDO'], 'integer'],
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
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
