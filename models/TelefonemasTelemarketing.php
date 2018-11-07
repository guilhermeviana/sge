<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefonemas_telemarketing".
 *
 * @property int $REGISTRO
 * @property string $PROTOCOLO
 * @property int $TELEFONISTA
 * @property int $ORIGEM
 * @property int $CAMPANHA
 * @property int $DIVULGACAO
 * @property int $FORMA_DIVULGACAO
 * @property int $ROTA_ATENDIMENTO
 * @property int $CORRETOR
 * @property string $DATA
 * @property string $HORA
 * @property int $CLIENTE
 * @property int $NUMERO_CONTATO
 * @property int $LIGACAO_FECHAMENTO
 * @property string $CONTRATO
 * @property double $VALOR_CONTRATADO
 * @property int $PARCELAS
 * @property int $PARCELA
 * @property double $MARGEM_DISPONIVEL
 * @property double $LIMITE_DISPONIVEL_SAQUE
 * @property double $LIMITE_COMPRA_DISPONIVEL
 * @property int $PRODUTO
 * @property int $EVENTO
 * @property string $DESCRICAO
 * @property int $TIPO_LIGACAO
 * @property string $TELEFONE
 * @property string $TELEFONE_2
 * @property string $CELULAR
 * @property int $SATISFACAO
 * @property int $REALIZADO
 * @property string $OBS
 * @property int $TEMPO_LIGACAO
 * @property int $TEMPO_ATENDIMENTO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class TelefonemasTelemarketing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telefonemas_telemarketing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TELEFONISTA', 'ORIGEM', 'CAMPANHA', 'DIVULGACAO', 'FORMA_DIVULGACAO', 'ROTA_ATENDIMENTO', 'CORRETOR', 'CLIENTE', 'NUMERO_CONTATO', 'LIGACAO_FECHAMENTO', 'PARCELAS', 'PARCELA', 'PRODUTO', 'EVENTO', 'TIPO_LIGACAO', 'SATISFACAO', 'REALIZADO', 'TEMPO_LIGACAO', 'TEMPO_ATENDIMENTO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'DATAREGISTRO'], 'safe'],
            [['VALOR_CONTRATADO', 'MARGEM_DISPONIVEL', 'LIMITE_DISPONIVEL_SAQUE', 'LIMITE_COMPRA_DISPONIVEL'], 'number'],
            [['OBS'], 'string'],
            [['PROTOCOLO'], 'string', 'max' => 20],
            [['CONTRATO', 'DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
            [['TELEFONE', 'TELEFONE_2', 'CELULAR'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PROTOCOLO' => 'Protocolo',
            'TELEFONISTA' => 'Telefonista',
            'ORIGEM' => 'Origem',
            'CAMPANHA' => 'Campanha',
            'DIVULGACAO' => 'Divulgacao',
            'FORMA_DIVULGACAO' => 'Forma  Divulgacao',
            'ROTA_ATENDIMENTO' => 'Rota  Atendimento',
            'CORRETOR' => 'Corretor',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'CLIENTE' => 'Cliente',
            'NUMERO_CONTATO' => 'Numero  Contato',
            'LIGACAO_FECHAMENTO' => 'Ligacao  Fechamento',
            'CONTRATO' => 'Contrato',
            'VALOR_CONTRATADO' => 'Valor  Contratado',
            'PARCELAS' => 'Parcelas',
            'PARCELA' => 'Parcela',
            'MARGEM_DISPONIVEL' => 'Margem  Disponivel',
            'LIMITE_DISPONIVEL_SAQUE' => 'Limite  Disponivel  Saque',
            'LIMITE_COMPRA_DISPONIVEL' => 'Limite  Compra  Disponivel',
            'PRODUTO' => 'Produto',
            'EVENTO' => 'Evento',
            'DESCRICAO' => 'Descricao',
            'TIPO_LIGACAO' => 'Tipo  Ligacao',
            'TELEFONE' => 'Telefone',
            'TELEFONE_2' => 'Telefone 2',
            'CELULAR' => 'Celular',
            'SATISFACAO' => 'Satisfacao',
            'REALIZADO' => 'Realizado',
            'OBS' => 'Obs',
            'TEMPO_LIGACAO' => 'Tempo  Ligacao',
            'TEMPO_ATENDIMENTO' => 'Tempo  Atendimento',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
