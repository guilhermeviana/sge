<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movdesconto_comissao".
 *
 * @property int $REGISTRO
 * @property int $DESCONTO_COMISSAO
 * @property string $DESCRICAO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MovdescontoComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movdesconto_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DESCONTO_COMISSAO', 'EXCLUIDO'], 'integer'],
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
            'DESCONTO_COMISSAO' => 'Desconto  Comissao',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
