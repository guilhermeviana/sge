<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mailing_enderecamento".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $CAMPANHA
 * @property string $DATA
 * @property string $DESCRICAO
 * @property string $DATA_POSTAGEM
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MailingEnderecamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailing_enderecamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CAMPANHA', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATA_POSTAGEM', 'DATAREGISTRO'], 'safe'],
            [['TABELA'], 'string', 'max' => 255],
            [['DESCRICAO'], 'string', 'max' => 100],
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
            'TABELA' => 'Tabela',
            'CAMPANHA' => 'Campanha',
            'DATA' => 'Data',
            'DESCRICAO' => 'Descricao',
            'DATA_POSTAGEM' => 'Data  Postagem',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
