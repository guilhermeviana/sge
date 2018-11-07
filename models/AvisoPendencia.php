<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aviso_pendencia".
 *
 * @property int $REGISTRO
 * @property int $PENDENCIA
 * @property int $ESTADO
 * @property string $AVISADO_POR
 * @property string $DATA_AVISO
 * @property string $HORA_AVISO
 * @property string $AVISADO_A
 * @property string $DATA_REGISTRO
 * @property string $OBS
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class AvisoPendencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aviso_pendencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PENDENCIA', 'ESTADO', 'EXCLUIDO'], 'integer'],
            [['DATA_AVISO', 'HORA_AVISO', 'DATA_REGISTRO'], 'safe'],
            [['OBS'], 'string'],
            [['AVISADO_POR', 'AVISADO_A', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PENDENCIA' => 'Pendencia',
            'ESTADO' => 'Estado',
            'AVISADO_POR' => 'Avisado  Por',
            'DATA_AVISO' => 'Data  Aviso',
            'HORA_AVISO' => 'Hora  Aviso',
            'AVISADO_A' => 'Avisado  A',
            'DATA_REGISTRO' => 'Data  Registro',
            'OBS' => 'Obs',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
