<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formula_comissao".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $FORMULA
 * @property int $EXCLUIDO
 */
class FormulaComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formula_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 50],
            [['FORMULA'], 'string', 'max' => 100],
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
            'FORMULA' => 'Formula',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
