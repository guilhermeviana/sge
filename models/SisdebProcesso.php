<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sisdeb_processo".
 *
 * @property int $REGISTRO
 * @property string $ARQUIVO
 * @property string $MD5
 * @property string $CONTEUDO
 * @property string $DATA
 */
class SisdebProcesso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisdeb_processo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CONTEUDO'], 'string'],
            [['DATA'], 'safe'],
            [['ARQUIVO'], 'string', 'max' => 255],
            [['MD5'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ARQUIVO' => 'Arquivo',
            'MD5' => 'Md5',
            'CONTEUDO' => 'Conteudo',
            'DATA' => 'Data',
        ];
    }
}
