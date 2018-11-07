<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefonista".
 *
 * @property int $REGISTRO
 * @property int $STATUS
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $LOGIN_CONF_OL
 * @property string $SENHA_CONF_OL
 * @property string $SIGLA_CONF_OL
 * @property double $RENTABILIDADE_MINIMA
 * @property double $COMISSAO_POR_RENT_SOB_COM_REC
 * @property string $OBSERVACAO
 * @property string $EMAIL
 * @property int $EXCLUIDO
 */
class Telefonista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telefonista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'EXCLUIDO'], 'integer'],
            [['RENTABILIDADE_MINIMA', 'COMISSAO_POR_RENT_SOB_COM_REC'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['REFERENCIA', 'LOGIN_CONF_OL', 'SENHA_CONF_OL', 'SIGLA_CONF_OL'], 'string', 'max' => 50],
            [['EMAIL'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'STATUS' => 'Status',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'LOGIN_CONF_OL' => 'Login  Conf  Ol',
            'SENHA_CONF_OL' => 'Senha  Conf  Ol',
            'SIGLA_CONF_OL' => 'Sigla  Conf  Ol',
            'RENTABILIDADE_MINIMA' => 'Rentabilidade  Minima',
            'COMISSAO_POR_RENT_SOB_COM_REC' => 'Comissao  Por  Rent  Sob  Com  Rec',
            'OBSERVACAO' => 'Observacao',
            'EMAIL' => 'Email',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
