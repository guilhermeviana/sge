<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movapolice".
 *
 * @property int $REGISTRO
 * @property int $APOLICE
 * @property string $DESCRICAO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movapolice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movapolice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['APOLICE', 'EXCLUIDO'], 'integer'],
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
            'APOLICE' => 'Apolice',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
