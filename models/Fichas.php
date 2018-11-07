<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fichas".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $UNIDADE
 * @property int $MINIMO
 * @property int $MINCORRETOR
 * @property string $OBS
 * @property int $EXCLUIDO
 */
class Fichas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fichas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'MINIMO', 'MINCORRETOR', 'EXCLUIDO'], 'integer'],
            [['OBS'], 'string'],
            [['DESCRICAO'], 'string', 'max' => 50],
            [['REFERENCIA'], 'string', 'max' => 10],
            [['UNIDADE'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PRODUTO' => 'Produto',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'UNIDADE' => 'Unidade',
            'MINIMO' => 'Minimo',
            'MINCORRETOR' => 'Mincorretor',
            'OBS' => 'Obs',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
