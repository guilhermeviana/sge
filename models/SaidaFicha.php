<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "saida_ficha".
 *
 * @property int $REGISTRO
 * @property int $FICHA
 * @property int $CORRETOR
 * @property string $HISTORICO
 * @property int $QUANTIDADE
 * @property string $DATA
 * @property string $HORA
 * @property string $OBS
 * @property string $USUARIO
 * @property string $DATAREGUPDT
 * @property string $USUARIOUPDT
 * @property int $EXCLUIDO
 */
class SaidaFicha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'saida_ficha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FICHA', 'CORRETOR', 'QUANTIDADE', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'DATAREGUPDT'], 'safe'],
            [['OBS'], 'string'],
            [['HISTORICO', 'USUARIO', 'USUARIOUPDT'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'FICHA' => 'Ficha',
            'CORRETOR' => 'Corretor',
            'HISTORICO' => 'Historico',
            'QUANTIDADE' => 'Quantidade',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'OBS' => 'Obs',
            'USUARIO' => 'Usuario',
            'DATAREGUPDT' => 'Dataregupdt',
            'USUARIOUPDT' => 'Usuarioupdt',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
