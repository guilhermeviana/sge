<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desconto_parcela".
 *
 * @property int $REGISTRO
 * @property int $TIPO_DESCONTO
 * @property int $PARCELA
 * @property int $ESTADO
 * @property string $DESCRICAO
 * @property string $DATA_DESCONTO
 * @property double $VALOR
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class DescontoParcela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desconto_parcela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_DESCONTO', 'PARCELA', 'ESTADO', 'EXCLUIDO'], 'integer'],
            [['DATA_DESCONTO', 'DATAREGISTRO'], 'safe'],
            [['VALOR'], 'number'],
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
            'TIPO_DESCONTO' => 'Tipo  Desconto',
            'PARCELA' => 'Parcela',
            'ESTADO' => 'Estado',
            'DESCRICAO' => 'Descricao',
            'DATA_DESCONTO' => 'Data  Desconto',
            'VALOR' => 'Valor',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
