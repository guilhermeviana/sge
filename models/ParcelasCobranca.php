<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcelas_cobranca".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property int $ORIGEM
 * @property int $PARCELA
 * @property int $TELEFONISTA
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ParcelasCobranca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parcelas_cobranca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'ORIGEM', 'PARCELA', 'TELEFONISTA', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
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
            'ATIVO' => 'Ativo',
            'ORIGEM' => 'Origem',
            'PARCELA' => 'Parcela',
            'TELEFONISTA' => 'Telefonista',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
