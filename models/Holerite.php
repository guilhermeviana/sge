<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "holerite".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property int $EMPRESA
 * @property int $MES
 * @property int $ANO
 * @property string $DATAINICIO
 * @property string $DATAFINAL
 * @property int $FUNCIONARIO
 * @property double $SALARIO_BASE
 * @property double $SALARIO_CONTRIB_INSS
 * @property double $FGTS
 * @property double $BASE_CALC_FGTS
 * @property double $IRRF
 * @property double $BASE_CALC_IRRF
 * @property string $MENSAGEM
 * @property string $DATA_CREDITO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Holerite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'holerite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA', 'DATAINICIO', 'DATAFINAL', 'DATA_CREDITO', 'DATAREGISTRO'], 'safe'],
            [['EMPRESA', 'MES', 'ANO', 'FUNCIONARIO', 'EXCLUIDO'], 'integer'],
            [['SALARIO_BASE', 'SALARIO_CONTRIB_INSS', 'FGTS', 'BASE_CALC_FGTS', 'IRRF', 'BASE_CALC_IRRF'], 'number'],
            [['MENSAGEM'], 'string'],
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
            'DATA' => 'Data',
            'EMPRESA' => 'Empresa',
            'MES' => 'Mes',
            'ANO' => 'Ano',
            'DATAINICIO' => 'Datainicio',
            'DATAFINAL' => 'Datafinal',
            'FUNCIONARIO' => 'Funcionario',
            'SALARIO_BASE' => 'Salario  Base',
            'SALARIO_CONTRIB_INSS' => 'Salario  Contrib  Inss',
            'FGTS' => 'Fgts',
            'BASE_CALC_FGTS' => 'Base  Calc  Fgts',
            'IRRF' => 'Irrf',
            'BASE_CALC_IRRF' => 'Base  Calc  Irrf',
            'MENSAGEM' => 'Mensagem',
            'DATA_CREDITO' => 'Data  Credito',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
