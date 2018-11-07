<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sync_categoria".
 *
 * @property int $REGISTRO_ORIGEM
 * @property int $REGISTRO_DESTINO
 */
class SyncCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sync_categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_ORIGEM', 'REGISTRO_DESTINO'], 'required'],
            [['REGISTRO_ORIGEM', 'REGISTRO_DESTINO'], 'integer'],
            [['REGISTRO_ORIGEM', 'REGISTRO_DESTINO'], 'unique', 'targetAttribute' => ['REGISTRO_ORIGEM', 'REGISTRO_DESTINO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO_ORIGEM' => 'Registro  Origem',
            'REGISTRO_DESTINO' => 'Registro  Destino',
        ];
    }
}
