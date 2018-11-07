<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sisdeb".
 *
 * @property int $REGISTRO
 * @property int $CONTA
 * @property int $NSA
 * @property string $USUARIO
 * @property string $DATA
 * @property string $DATA_DEBITO
 * @property int $TOTREG
 * @property double $VALORTX
 * @property double $VALORPC
 * @property double $VALORTXRT
 * @property double $VALORPCRT
 * @property double $VALORAVRT
 * @property string $DATART
 * @property int $TOTREGTX
 * @property int $TOTREGPC
 * @property int $TOTREGAVRT
 * @property int $TOTREGTXRT
 * @property int $TOTREGPCRT
 * @property int $TOTREGRT
 * @property string $ARQUIVORT
 * @property string $USUARIORT
 * @property string $ARQUIVO
 * @property int $RETORNADO
 * @property int $EXCLUIDO
 */
class Sisdeb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisdeb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CONTA', 'NSA', 'TOTREG', 'TOTREGTX', 'TOTREGPC', 'TOTREGAVRT', 'TOTREGTXRT', 'TOTREGPCRT', 'TOTREGRT', 'RETORNADO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATA_DEBITO', 'DATART'], 'safe'],
            [['VALORTX', 'VALORPC', 'VALORTXRT', 'VALORPCRT', 'VALORAVRT'], 'number'],
            [['USUARIO', 'USUARIORT'], 'string', 'max' => 50],
            [['ARQUIVORT', 'ARQUIVO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CONTA' => 'Conta',
            'NSA' => 'Nsa',
            'USUARIO' => 'Usuario',
            'DATA' => 'Data',
            'DATA_DEBITO' => 'Data  Debito',
            'TOTREG' => 'Totreg',
            'VALORTX' => 'Valortx',
            'VALORPC' => 'Valorpc',
            'VALORTXRT' => 'Valortxrt',
            'VALORPCRT' => 'Valorpcrt',
            'VALORAVRT' => 'Valoravrt',
            'DATART' => 'Datart',
            'TOTREGTX' => 'Totregtx',
            'TOTREGPC' => 'Totregpc',
            'TOTREGAVRT' => 'Totregavrt',
            'TOTREGTXRT' => 'Totregtxrt',
            'TOTREGPCRT' => 'Totregpcrt',
            'TOTREGRT' => 'Totregrt',
            'ARQUIVORT' => 'Arquivort',
            'USUARIORT' => 'Usuariort',
            'ARQUIVO' => 'Arquivo',
            'RETORNADO' => 'Retornado',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
