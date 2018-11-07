<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mailing".
 *
 * @property int $REGISTRO
 * @property int $EXIBIR_TELEOPERADOR
 * @property int $STATUS
 * @property string $TABELA
 * @property int $CAMPANHA
 * @property string $DATA
 * @property string $DESCRICAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Mailing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXIBIR_TELEOPERADOR', 'STATUS', 'CAMPANHA', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['TABELA', 'DESCRICAO'], 'string', 'max' => 255],
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
            'EXIBIR_TELEOPERADOR' => 'Exibir  Teleoperador',
            'STATUS' => 'Status',
            'TABELA' => 'Tabela',
            'CAMPANHA' => 'Campanha',
            'DATA' => 'Data',
            'DESCRICAO' => 'Descricao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
