<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cp_centro_custos".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property string $CODIGO_CENTRO_CUSTO
 * @property string $DESCRICAO
 * @property int $TIPO_CENTRO_CUSTO
 * @property int $SOMA_NA_DRE
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class CpCentroCustos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp_centro_custos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'TIPO_CENTRO_CUSTO', 'SOMA_NA_DRE', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['CODIGO_CENTRO_CUSTO'], 'string', 'max' => 20],
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
            'ATIVO' => 'Ativo',
            'CODIGO_CENTRO_CUSTO' => 'Codigo  Centro  Custo',
            'DESCRICAO' => 'Descricao',
            'TIPO_CENTRO_CUSTO' => 'Tipo  Centro  Custo',
            'SOMA_NA_DRE' => 'Soma  Na  Dre',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
