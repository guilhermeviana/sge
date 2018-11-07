<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liberacao_remota".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property string $MOTIVO
 * @property string $OBSERVACAO
 * @property int $CODIGO
 * @property string $DATA_REQUISICAO
 * @property string $USUARIO_REQUISITO
 * @property string $DATA_LIBERACAO
 * @property string $USUARIO_LIBERACAO
 * @property string $DATA_REJEICAO
 * @property string $USUARIO_REJEICAO
 * @property string $DATA_UTILIZACAO
 * @property string $USUARIO_UTILIZACAO
 * @property string $RESSALVA
 * @property int $EXCLUIDO
 */
class LiberacaoRemota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'liberacao_remota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'CODIGO', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO', 'RESSALVA'], 'string'],
            [['DATA_REQUISICAO', 'DATA_LIBERACAO', 'DATA_REJEICAO', 'DATA_UTILIZACAO'], 'safe'],
            [['MOTIVO'], 'string', 'max' => 255],
            [['USUARIO_REQUISITO', 'USUARIO_LIBERACAO', 'USUARIO_REJEICAO', 'USUARIO_UTILIZACAO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'MOTIVO' => 'Motivo',
            'OBSERVACAO' => 'Observacao',
            'CODIGO' => 'Codigo',
            'DATA_REQUISICAO' => 'Data  Requisicao',
            'USUARIO_REQUISITO' => 'Usuario  Requisito',
            'DATA_LIBERACAO' => 'Data  Liberacao',
            'USUARIO_LIBERACAO' => 'Usuario  Liberacao',
            'DATA_REJEICAO' => 'Data  Rejeicao',
            'USUARIO_REJEICAO' => 'Usuario  Rejeicao',
            'DATA_UTILIZACAO' => 'Data  Utilizacao',
            'USUARIO_UTILIZACAO' => 'Usuario  Utilizacao',
            'RESSALVA' => 'Ressalva',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
