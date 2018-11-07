<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cp_tipo_centro_custos".
 *
 * @property int $REGISTRO
 * @property int $TIPO_CENTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class CpTipoCentroCustos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp_tipo_centro_custos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_CENTRO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
            [['REFERENCIA'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO_CENTRO' => 'Tipo  Centro',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
