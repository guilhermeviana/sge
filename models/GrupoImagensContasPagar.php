<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo_imagens_contas_pagar".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class GrupoImagensContasPagar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo_imagens_contas_pagar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATAREGISTRO'], 'safe'],
            [['EXCLUIDO'], 'integer'],
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
            'DESCRICAO' => 'Descricao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
