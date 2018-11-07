<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sys_licenca_maquinas".
 *
 * @property int $REGISTRO
 * @property int $LICENCA_SCE
 * @property string $ID
 * @property string $SERIAL
 * @property string $NOME_MAQUINA
 * @property string $DATA_INSTALACAO
 * @property string $ULTIMO_ACESSO
 * @property string $ULTIMO_IP
 * @property int $ATIVA
 * @property int $TIPO_LICENCA
 * @property int $ACESSO_EXTERNO
 * @property string $VERSAO_ATUAL
 * @property int $EXCLUIDO
 */
class SysLicencaMaquinas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sys_licenca_maquinas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LICENCA_SCE', 'ATIVA', 'TIPO_LICENCA', 'ACESSO_EXTERNO', 'EXCLUIDO'], 'integer'],
            [['DATA_INSTALACAO', 'ULTIMO_ACESSO'], 'safe'],
            [['ID', 'SERIAL'], 'string', 'max' => 40],
            [['NOME_MAQUINA'], 'string', 'max' => 50],
            [['ULTIMO_IP'], 'string', 'max' => 32],
            [['VERSAO_ATUAL'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'LICENCA_SCE' => 'Licenca  Sce',
            'ID' => 'ID',
            'SERIAL' => 'Serial',
            'NOME_MAQUINA' => 'Nome  Maquina',
            'DATA_INSTALACAO' => 'Data  Instalacao',
            'ULTIMO_ACESSO' => 'Ultimo  Acesso',
            'ULTIMO_IP' => 'Ultimo  Ip',
            'ATIVA' => 'Ativa',
            'TIPO_LICENCA' => 'Tipo  Licenca',
            'ACESSO_EXTERNO' => 'Acesso  Externo',
            'VERSAO_ATUAL' => 'Versao  Atual',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
