<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boleta".
 *
 * @property int $REGISTRO
 * @property int $PARCELA
 * @property int $CONTA
 * @property string $NOSSO_NUMERO
 * @property string $DOCUMENTO
 * @property double $VALOR
 * @property string $VENCIMENTO
 * @property string $PAGAMENTO
 * @property double $VALOR_PAGO
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class Boleta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boleta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCELA', 'CONTA', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_PAGO'], 'number'],
            [['VENCIMENTO', 'PAGAMENTO', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['NOSSO_NUMERO', 'DOCUMENTO'], 'string', 'max' => 20],
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
            'PARCELA' => 'Parcela',
            'CONTA' => 'Conta',
            'NOSSO_NUMERO' => 'Nosso  Numero',
            'DOCUMENTO' => 'Documento',
            'VALOR' => 'Valor',
            'VENCIMENTO' => 'Vencimento',
            'PAGAMENTO' => 'Pagamento',
            'VALOR_PAGO' => 'Valor  Pago',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
