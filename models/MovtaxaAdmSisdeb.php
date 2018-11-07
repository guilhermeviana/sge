<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movtaxa_adm_sisdeb".
 *
 * @property int $REGISTRO
 * @property int $REG_TAXA
 * @property int $CLIENTE
 * @property int $NSA
 * @property int $CONTA_CREDITO
 * @property int $CONTA_DEBITO
 * @property string $VENCIMENTO
 * @property int $MES
 * @property int $ANO
 * @property double $VALOR
 * @property double $VALOR_PAGO
 * @property double $VALOR_JUROS
 * @property string $DATAGERACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $RECEBIDO
 * @property string $DATA_RECEBIDO
 * @property string $USUARIO_RECEBIDO
 * @property int $CANCELADO
 * @property string $DATA_RETORNO
 * @property string $USUARIO_RETORNO
 * @property string $DESCRICAO_RETORNO
 * @property double $PERCENTUAL_AGENCIADOR
 * @property double $PERCENTUAL_CAPTADOR
 * @property double $PERCENTUAL_CORRETOR
 * @property string $REPASSADO_AGENCIADOR
 * @property string $REPASSADO_CAPTADOR
 * @property string $REPASSADO_CORRETOR
 * @property int $EXCLUIDO
 */
class MovtaxaAdmSisdeb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movtaxa_adm_sisdeb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REG_TAXA', 'CLIENTE', 'NSA', 'CONTA_CREDITO', 'CONTA_DEBITO', 'MES', 'ANO', 'RECEBIDO', 'CANCELADO', 'EXCLUIDO'], 'integer'],
            [['VENCIMENTO', 'DATAGERACAO', 'DATAREGISTRO', 'DATA_RECEBIDO', 'DATA_RETORNO', 'REPASSADO_AGENCIADOR', 'REPASSADO_CAPTADOR', 'REPASSADO_CORRETOR'], 'safe'],
            [['VALOR', 'VALOR_PAGO', 'VALOR_JUROS', 'PERCENTUAL_AGENCIADOR', 'PERCENTUAL_CAPTADOR', 'PERCENTUAL_CORRETOR'], 'number'],
            [['USUARIO', 'USUARIO_RECEBIDO', 'USUARIO_RETORNO'], 'string', 'max' => 50],
            [['DESCRICAO_RETORNO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'REG_TAXA' => 'Reg  Taxa',
            'CLIENTE' => 'Cliente',
            'NSA' => 'Nsa',
            'CONTA_CREDITO' => 'Conta  Credito',
            'CONTA_DEBITO' => 'Conta  Debito',
            'VENCIMENTO' => 'Vencimento',
            'MES' => 'Mes',
            'ANO' => 'Ano',
            'VALOR' => 'Valor',
            'VALOR_PAGO' => 'Valor  Pago',
            'VALOR_JUROS' => 'Valor  Juros',
            'DATAGERACAO' => 'Datageracao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'RECEBIDO' => 'Recebido',
            'DATA_RECEBIDO' => 'Data  Recebido',
            'USUARIO_RECEBIDO' => 'Usuario  Recebido',
            'CANCELADO' => 'Cancelado',
            'DATA_RETORNO' => 'Data  Retorno',
            'USUARIO_RETORNO' => 'Usuario  Retorno',
            'DESCRICAO_RETORNO' => 'Descricao  Retorno',
            'PERCENTUAL_AGENCIADOR' => 'Percentual  Agenciador',
            'PERCENTUAL_CAPTADOR' => 'Percentual  Captador',
            'PERCENTUAL_CORRETOR' => 'Percentual  Corretor',
            'REPASSADO_AGENCIADOR' => 'Repassado  Agenciador',
            'REPASSADO_CAPTADOR' => 'Repassado  Captador',
            'REPASSADO_CORRETOR' => 'Repassado  Corretor',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
