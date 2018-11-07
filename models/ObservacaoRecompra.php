<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "observacao_recompra".
 *
 * @property int $REGISTRO
 * @property int $RECOMPRA
 * @property int $ENVIA_CORRETOR
 * @property string $DATA
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ObservacaoRecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'observacao_recompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RECOMPRA', 'ENVIA_CORRETOR', 'EXCLUIDO'], 'integer'],
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
            'RECOMPRA' => 'Recompra',
            'ENVIA_CORRETOR' => 'Envia  Corretor',
            'DATA' => 'Data',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
