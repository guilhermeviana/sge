<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_holerite".
 *
 * @property int $REGISTRO
 * @property int $HOLERITE
 * @property string $CODIGO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property double $VENCIMENTOS
 * @property double $DESCONTOS
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ItensHolerite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_holerite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['HOLERITE', 'EXCLUIDO'], 'integer'],
            [['VENCIMENTOS', 'DESCONTOS'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['CODIGO', 'REFERENCIA'], 'string', 'max' => 10],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'HOLERITE' => 'Holerite',
            'CODIGO' => 'Codigo',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'VENCIMENTOS' => 'Vencimentos',
            'DESCONTOS' => 'Descontos',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
