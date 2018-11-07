<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_caixa".
 *
 * @property int $REGISTRO
 * @property int $ORIGEM
 * @property int $REGISTRO_CPR
 * @property int $REGISTRO_ICPR
 * @property int $REGISTRO_TRF
 * @property int $REGISTRO_P_EMP
 * @property int $FORMA_QUITACAO_P_EMP
 * @property int $REGISTRO_T_ADMIN
 * @property int $CONTA
 * @property int $CORRETOR
 * @property int $USA_CENTRO_CUSTOS
 * @property int $CENTRO_CUSTOS
 * @property int $PLANO_DE_CONTAS
 * @property string $DESCRICAO
 * @property string $DATA
 * @property double $VALOR
 * @property int $ENTRADA
 * @property int $RATEIA_LANCAMENTO
 * @property int $RATEIO_AUTOMATICO
 * @property int $FORMA_PAG
 * @property string $DOCUMENTO
 * @property string $DATAREG
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class FinCaixa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_caixa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORIGEM', 'REGISTRO_CPR', 'REGISTRO_ICPR', 'REGISTRO_TRF', 'REGISTRO_P_EMP', 'FORMA_QUITACAO_P_EMP', 'REGISTRO_T_ADMIN', 'CONTA', 'CORRETOR', 'USA_CENTRO_CUSTOS', 'CENTRO_CUSTOS', 'PLANO_DE_CONTAS', 'ENTRADA', 'RATEIA_LANCAMENTO', 'RATEIO_AUTOMATICO', 'FORMA_PAG', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREG'], 'safe'],
            [['VALOR'], 'number'],
            [['DESCRICAO'], 'string', 'max' => 255],
            [['DOCUMENTO'], 'string', 'max' => 30],
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
            'ORIGEM' => 'Origem',
            'REGISTRO_CPR' => 'Registro  Cpr',
            'REGISTRO_ICPR' => 'Registro  Icpr',
            'REGISTRO_TRF' => 'Registro  Trf',
            'REGISTRO_P_EMP' => 'Registro  P  Emp',
            'FORMA_QUITACAO_P_EMP' => 'Forma  Quitacao  P  Emp',
            'REGISTRO_T_ADMIN' => 'Registro  T  Admin',
            'CONTA' => 'Conta',
            'CORRETOR' => 'Corretor',
            'USA_CENTRO_CUSTOS' => 'Usa  Centro  Custos',
            'CENTRO_CUSTOS' => 'Centro  Custos',
            'PLANO_DE_CONTAS' => 'Plano  De  Contas',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'ENTRADA' => 'Entrada',
            'RATEIA_LANCAMENTO' => 'Rateia  Lancamento',
            'RATEIO_AUTOMATICO' => 'Rateio  Automatico',
            'FORMA_PAG' => 'Forma  Pag',
            'DOCUMENTO' => 'Documento',
            'DATAREG' => 'Datareg',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
