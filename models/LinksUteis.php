<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "links_uteis".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $ENDERECO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class LinksUteis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links_uteis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['ENDERECO'], 'string', 'max' => 255],
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
            'ENDERECO' => 'Endereco',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
