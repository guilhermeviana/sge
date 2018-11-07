<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atendimento_balcao".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property string $HORA
 * @property int $CORRETOR
 * @property int $ATENDENTE
 * @property int $ASSISTENTE
 * @property int $ROTA_ATENDIMENTO
 * @property string $NOME
 * @property string $CPF
 * @property string $BENEFICIO
 * @property string $MASP
 * @property string $SIAPE
 * @property string $TELEFONE
 * @property string $CELULAR
 * @property string $EMAIL
 * @property int $DIVULGACAO
 * @property int $PRODUTO
 * @property double $VALOR
 * @property int $PARCELAS
 * @property double $VALOR_PARCELAS
 * @property string $OBSERVACAO
 * @property int $STATUS_ATENDIMENTO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property string $DATAAT
 * @property string $USUARIOAT
 * @property int $EXCLUIDO
 */
class AtendimentoBalcao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atendimento_balcao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA', 'HORA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['CORRETOR', 'ATENDENTE', 'ASSISTENTE', 'ROTA_ATENDIMENTO', 'DIVULGACAO', 'PRODUTO', 'PARCELAS', 'STATUS_ATENDIMENTO', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_PARCELAS'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['CPF'], 'string', 'max' => 14],
            [['BENEFICIO', 'MASP', 'SIAPE'], 'string', 'max' => 30],
            [['TELEFONE'], 'string', 'max' => 12],
            [['CELULAR'], 'string', 'max' => 10],
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
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'CORRETOR' => 'Corretor',
            'ATENDENTE' => 'Atendente',
            'ASSISTENTE' => 'Assistente',
            'ROTA_ATENDIMENTO' => 'Rota  Atendimento',
            'NOME' => 'Nome',
            'CPF' => 'Cpf',
            'BENEFICIO' => 'Beneficio',
            'MASP' => 'Masp',
            'SIAPE' => 'Siape',
            'TELEFONE' => 'Telefone',
            'CELULAR' => 'Celular',
            'EMAIL' => 'Email',
            'DIVULGACAO' => 'Divulgacao',
            'PRODUTO' => 'Produto',
            'VALOR' => 'Valor',
            'PARCELAS' => 'Parcelas',
            'VALOR_PARCELAS' => 'Valor  Parcelas',
            'OBSERVACAO' => 'Observacao',
            'STATUS_ATENDIMENTO' => 'Status  Atendimento',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'DATAAT' => 'Dataat',
            'USUARIOAT' => 'Usuarioat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
