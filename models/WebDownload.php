<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_download".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property string $DESCRICAO
 * @property string $DATA_INICIO
 * @property string $DATA_FINAL
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class WebDownload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_download';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'EXCLUIDO'], 'integer'],
            [['DATA_INICIO', 'DATA_FINAL', 'DATAREGISTRO'], 'safe'],
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
            'DESCRICAO' => 'Descricao',
            'DATA_INICIO' => 'Data  Inicio',
            'DATA_FINAL' => 'Data  Final',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
