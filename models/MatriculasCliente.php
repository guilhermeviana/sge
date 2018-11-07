<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matriculas_cliente".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $TIPO
 * @property string $ORGAO
 * @property string $MATRICULA
 * @property string $DIG_MATRICULA
 * @property string $ESPECIE
 * @property string $DATA_INICIO
 * @property string $SENHA_MATRICULA
 * @property string $SENHA_CONTRA_CHEQUE
 * @property string $BANCO_PAGADOR
 * @property string $AGENCIA
 * @property string $NOME_AGENCIA
 * @property string $CONTA
 * @property string $TIPO_CONTA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MatriculasCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matriculas_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'TIPO', 'EXCLUIDO'], 'integer'],
            [['DATA_INICIO', 'DATAREGISTRO'], 'safe'],
            [['ORGAO', 'NOME_AGENCIA', 'USUARIO'], 'string', 'max' => 50],
            [['MATRICULA', 'ESPECIE', 'SENHA_MATRICULA', 'SENHA_CONTRA_CHEQUE', 'TIPO_CONTA'], 'string', 'max' => 30],
            [['DIG_MATRICULA', 'BANCO_PAGADOR'], 'string', 'max' => 3],
            [['AGENCIA'], 'string', 'max' => 5],
            [['CONTA'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'TIPO' => 'Tipo',
            'ORGAO' => 'Orgao',
            'MATRICULA' => 'Matricula',
            'DIG_MATRICULA' => 'Dig  Matricula',
            'ESPECIE' => 'Especie',
            'DATA_INICIO' => 'Data  Inicio',
            'SENHA_MATRICULA' => 'Senha  Matricula',
            'SENHA_CONTRA_CHEQUE' => 'Senha  Contra  Cheque',
            'BANCO_PAGADOR' => 'Banco  Pagador',
            'AGENCIA' => 'Agencia',
            'NOME_AGENCIA' => 'Nome  Agencia',
            'CONTA' => 'Conta',
            'TIPO_CONTA' => 'Tipo  Conta',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
