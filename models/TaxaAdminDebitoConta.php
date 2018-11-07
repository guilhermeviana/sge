<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taxa_admin_debito_conta".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property int $PARCEIRO
 * @property int $ATIVO
 * @property int $MOTIVO_CANCELAMENTO
 * @property string $DATA_CANCELAMENTO
 * @property double $VALOR
 * @property string $INICIO_TAXA
 * @property int $CONTA_CLIENTE
 * @property int $CONTA_CREDITO
 * @property int $DATA_PAGAMENTO
 * @property int $TIPOVENC
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $INTEGRA_SEGURO
 * @property int $SEGURADORA
 * @property int $EXCLUIDO
 */
class TaxaAdminDebitoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taxa_admin_debito_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'CLIENTE', 'PARCEIRO', 'ATIVO', 'MOTIVO_CANCELAMENTO', 'CONTA_CLIENTE', 'CONTA_CREDITO', 'DATA_PAGAMENTO', 'TIPOVENC', 'INTEGRA_SEGURO', 'SEGURADORA', 'EXCLUIDO'], 'integer'],
            [['DATA_CANCELAMENTO', 'INICIO_TAXA', 'DATAREGISTRO'], 'safe'],
            [['VALOR'], 'number'],
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
            'CORRETOR' => 'Corretor',
            'CLIENTE' => 'Cliente',
            'PARCEIRO' => 'Parceiro',
            'ATIVO' => 'Ativo',
            'MOTIVO_CANCELAMENTO' => 'Motivo  Cancelamento',
            'DATA_CANCELAMENTO' => 'Data  Cancelamento',
            'VALOR' => 'Valor',
            'INICIO_TAXA' => 'Inicio  Taxa',
            'CONTA_CLIENTE' => 'Conta  Cliente',
            'CONTA_CREDITO' => 'Conta  Credito',
            'DATA_PAGAMENTO' => 'Data  Pagamento',
            'TIPOVENC' => 'Tipovenc',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'INTEGRA_SEGURO' => 'Integra  Seguro',
            'SEGURADORA' => 'Seguradora',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
