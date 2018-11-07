<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_telefonista".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property int $ORIGEM
 * @property int $MAILING
 * @property int $CAMPANHA
 * @property int $CLIENTE
 * @property int $TELEFONISTA
 * @property int $REGISTRO_TELEFONEMA
 * @property int $EXIBIR_FILTRO_TELEMARKETING
 * @property string $VALIDADE
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ClienteTelefonista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_telefonista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'ORIGEM', 'MAILING', 'CAMPANHA', 'CLIENTE', 'TELEFONISTA', 'REGISTRO_TELEFONEMA', 'EXIBIR_FILTRO_TELEMARKETING', 'EXCLUIDO'], 'integer'],
            [['VALIDADE', 'DATA'], 'safe'],
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
            'MAILING' => 'Mailing',
            'CAMPANHA' => 'Campanha',
            'CLIENTE' => 'Cliente',
            'TELEFONISTA' => 'Telefonista',
            'REGISTRO_TELEFONEMA' => 'Registro  Telefonema',
            'EXIBIR_FILTRO_TELEMARKETING' => 'Exibir  Filtro  Telemarketing',
            'VALIDADE' => 'Validade',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
