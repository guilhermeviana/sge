<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "postit".
 *
 * @property int $REGISTRO
 * @property string $MENSAGEM
 * @property int $TOP
 * @property int $ESQUERDA
 * @property int $LARGURA
 * @property int $ALTURA
 * @property int $COR
 * @property string $USUARIO
 * @property string $USUARIO_REGISTRO
 * @property string $DATA
 * @property string $HORA
 * @property int $EXCLUIDO
 */
class Postit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'postit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MENSAGEM'], 'string'],
            [['TOP', 'ESQUERDA', 'LARGURA', 'ALTURA', 'COR', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA'], 'safe'],
            [['USUARIO', 'USUARIO_REGISTRO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'MENSAGEM' => 'Mensagem',
            'TOP' => 'Top',
            'ESQUERDA' => 'Esquerda',
            'LARGURA' => 'Largura',
            'ALTURA' => 'Altura',
            'COR' => 'Cor',
            'USUARIO' => 'Usuario',
            'USUARIO_REGISTRO' => 'Usuario  Registro',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
