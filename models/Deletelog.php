<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deletelog".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $REG
 * @property string $USUARIOATUAL
 * @property string $USUARIOPERMITE
 * @property string $OBS
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class Deletelog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deletelog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REG', 'EXCLUIDO'], 'integer'],
            [['OBS'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['TABELA', 'USUARIOATUAL', 'USUARIOPERMITE'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TABELA' => 'Tabela',
            'REG' => 'Reg',
            'USUARIOATUAL' => 'Usuarioatual',
            'USUARIOPERMITE' => 'Usuariopermite',
            'OBS' => 'Obs',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
