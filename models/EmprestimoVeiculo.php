<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo_veiculo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $ATIVO
 * @property double $VALOR_VEICULO
 * @property double $VALOR_FINANCIADO
 * @property double $VALOR_ENTRADA
 * @property double $TARIFAS
 * @property int $MARCA_VEICULO
 * @property int $TIPO_VEICULO
 * @property string $MODELO
 * @property int $COMBUSTIVEL
 * @property int $ANO_MODELO
 * @property string $CODIGO_FIPE
 * @property string $RENAVAN
 * @property string $CHASSI
 * @property string $PLACA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class EmprestimoVeiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo_veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'ATIVO', 'MARCA_VEICULO', 'TIPO_VEICULO', 'COMBUSTIVEL', 'ANO_MODELO', 'EXCLUIDO'], 'integer'],
            [['VALOR_VEICULO', 'VALOR_FINANCIADO', 'VALOR_ENTRADA', 'TARIFAS'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['MODELO', 'RENAVAN', 'CHASSI', 'USUARIO'], 'string', 'max' => 50],
            [['CODIGO_FIPE', 'PLACA'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'EMPRESTIMO' => 'Emprestimo',
            'ATIVO' => 'Ativo',
            'VALOR_VEICULO' => 'Valor  Veiculo',
            'VALOR_FINANCIADO' => 'Valor  Financiado',
            'VALOR_ENTRADA' => 'Valor  Entrada',
            'TARIFAS' => 'Tarifas',
            'MARCA_VEICULO' => 'Marca  Veiculo',
            'TIPO_VEICULO' => 'Tipo  Veiculo',
            'MODELO' => 'Modelo',
            'COMBUSTIVEL' => 'Combustivel',
            'ANO_MODELO' => 'Ano  Modelo',
            'CODIGO_FIPE' => 'Codigo  Fipe',
            'RENAVAN' => 'Renavan',
            'CHASSI' => 'Chassi',
            'PLACA' => 'Placa',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
