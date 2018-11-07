<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forma_pag".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBRIGA
 * @property int $EXCLUIDO
 */
class FormaPag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forma_pag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 50],
            [['REFERENCIA'], 'string', 'max' => 10],
            [['OBRIGA'], 'string', 'max' => 6],
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
            'REFERENCIA' => 'Referencia',
            'OBRIGA' => 'Obriga',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
