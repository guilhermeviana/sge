<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ocorrencias_parcela".
 *
 * @property int $REGISTRO
 * @property int $PARCELA
 * @property string $DATA
 * @property int $OCORRENCIA
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class OcorrenciasParcela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ocorrencias_parcela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCELA', 'OCORRENCIA', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
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
            'PARCELA' => 'Parcela',
            'DATA' => 'Data',
            'OCORRENCIA' => 'Ocorrencia',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
