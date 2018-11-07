<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retencao".
 *
 * @property int $REGISTRO
 * @property int $STATUS
 * @property string $PROTOCOLO
 * @property string $DATA
 * @property string $HORA
 * @property string $DATA_RECEBIMENTO
 * @property string $USUARIO_RECEBIMENTO
 * @property int $CORRETOR
 * @property int $ATENDENTE
 * @property int $ASSISTENTE
 * @property string $NOME
 * @property string $CPF
 * @property string $BENEFICIO
 * @property string $MASP
 * @property string $SIAPE
 * @property string $TELEFONE
 * @property string $CELULAR
 * @property string $EMAIL
 * @property int $REGIAO_CLIENTE
 * @property int $DIVULGACAO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property string $DATA_DIGITACAO
 * @property string $HORA_DIGITACAO
 * @property string $DATA_ENVIO_BANCO
 * @property string $DATA_INTEGRACAO
 * @property string $DATA_RESSARCIMENTO_BANCO
 * @property string $DATA_RESSARCIMENTO_EMPRESA
 * @property string $CARTORIO
 * @property int $CART_RECONHECIMENTOS
 * @property int $CART_FIRMAS
 * @property int $CART_PROCURACAO
 * @property string $PROCURADOR
 * @property int $FORMA_PAGAMENTO_CLIENTE
 * @property int $TIPO_CONTA
 * @property string $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property double $VALOR
 * @property int $PARCELAS
 * @property double $VALOR_PARCELAS
 * @property string $DATA_CALCULO
 * @property int $FORMULA
 * @property double $FATOR
 * @property double $VALOR_PARCELA
 * @property double $VALOR_BRUTO
 * @property double $VALOR_DIVIDA
 * @property double $VALOR_LIQUIDO
 * @property double $VALOR_MARGEM
 * @property string $OBSERVACAO
 * @property int $STATUS_ATENDIMENTO
 * @property int $REGISTRO_CORRESPONDENTE
 * @property string $CORRESPONDENTE
 * @property int $VER_POSSIB_RECOMPRA
 * @property int $MARGEM_RESERVADA
 * @property int $EMAIL_ENVIADO
 * @property int $OFERTA_CREDITO
 * @property int $ENVIO_SMS_1
 * @property int $ENVIO_SMS_2
 * @property int $ENVIO_SMS_3
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property string $DATAAT
 * @property string $USUARIOAT
 * @property int $EXCLUIDO
 */
class Retencao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retencao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'CORRETOR', 'ATENDENTE', 'ASSISTENTE', 'REGIAO_CLIENTE', 'DIVULGACAO', 'PRODUTO', 'CATEGORIA', 'CART_RECONHECIMENTOS', 'CART_FIRMAS', 'CART_PROCURACAO', 'FORMA_PAGAMENTO_CLIENTE', 'TIPO_CONTA', 'PARCELAS', 'FORMULA', 'STATUS_ATENDIMENTO', 'REGISTRO_CORRESPONDENTE', 'VER_POSSIB_RECOMPRA', 'MARGEM_RESERVADA', 'EMAIL_ENVIADO', 'OFERTA_CREDITO', 'ENVIO_SMS_1', 'ENVIO_SMS_2', 'ENVIO_SMS_3', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'DATA_RECEBIMENTO', 'DATA_DIGITACAO', 'HORA_DIGITACAO', 'DATA_ENVIO_BANCO', 'DATA_INTEGRACAO', 'DATA_RESSARCIMENTO_BANCO', 'DATA_RESSARCIMENTO_EMPRESA', 'DATA_CALCULO', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['VALOR', 'VALOR_PARCELAS', 'FATOR', 'VALOR_PARCELA', 'VALOR_BRUTO', 'VALOR_DIVIDA', 'VALOR_LIQUIDO', 'VALOR_MARGEM'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['PROTOCOLO', 'CONTA'], 'string', 'max' => 15],
            [['USUARIO_RECEBIMENTO', 'NOME', 'CARTORIO', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['CPF'], 'string', 'max' => 14],
            [['BENEFICIO', 'MASP', 'SIAPE'], 'string', 'max' => 30],
            [['TELEFONE'], 'string', 'max' => 12],
            [['CELULAR'], 'string', 'max' => 10],
            [['EMAIL'], 'string', 'max' => 255],
            [['PROCURADOR', 'CORRESPONDENTE'], 'string', 'max' => 100],
            [['BANCO'], 'string', 'max' => 3],
            [['AGENCIA'], 'string', 'max' => 6],
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
            'PROTOCOLO' => 'Protocolo',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'DATA_RECEBIMENTO' => 'Data  Recebimento',
            'USUARIO_RECEBIMENTO' => 'Usuario  Recebimento',
            'CORRETOR' => 'Corretor',
            'ATENDENTE' => 'Atendente',
            'ASSISTENTE' => 'Assistente',
            'NOME' => 'Nome',
            'CPF' => 'Cpf',
            'BENEFICIO' => 'Beneficio',
            'MASP' => 'Masp',
            'SIAPE' => 'Siape',
            'TELEFONE' => 'Telefone',
            'CELULAR' => 'Celular',
            'EMAIL' => 'Email',
            'REGIAO_CLIENTE' => 'Regiao  Cliente',
            'DIVULGACAO' => 'Divulgacao',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'DATA_DIGITACAO' => 'Data  Digitacao',
            'HORA_DIGITACAO' => 'Hora  Digitacao',
            'DATA_ENVIO_BANCO' => 'Data  Envio  Banco',
            'DATA_INTEGRACAO' => 'Data  Integracao',
            'DATA_RESSARCIMENTO_BANCO' => 'Data  Ressarcimento  Banco',
            'DATA_RESSARCIMENTO_EMPRESA' => 'Data  Ressarcimento  Empresa',
            'CARTORIO' => 'Cartorio',
            'CART_RECONHECIMENTOS' => 'Cart  Reconhecimentos',
            'CART_FIRMAS' => 'Cart  Firmas',
            'CART_PROCURACAO' => 'Cart  Procuracao',
            'PROCURADOR' => 'Procurador',
            'FORMA_PAGAMENTO_CLIENTE' => 'Forma  Pagamento  Cliente',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'VALOR' => 'Valor',
            'PARCELAS' => 'Parcelas',
            'VALOR_PARCELAS' => 'Valor  Parcelas',
            'DATA_CALCULO' => 'Data  Calculo',
            'FORMULA' => 'Formula',
            'FATOR' => 'Fator',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'VALOR_BRUTO' => 'Valor  Bruto',
            'VALOR_DIVIDA' => 'Valor  Divida',
            'VALOR_LIQUIDO' => 'Valor  Liquido',
            'VALOR_MARGEM' => 'Valor  Margem',
            'OBSERVACAO' => 'Observacao',
            'STATUS_ATENDIMENTO' => 'Status  Atendimento',
            'REGISTRO_CORRESPONDENTE' => 'Registro  Correspondente',
            'CORRESPONDENTE' => 'Correspondente',
            'VER_POSSIB_RECOMPRA' => 'Ver  Possib  Recompra',
            'MARGEM_RESERVADA' => 'Margem  Reservada',
            'EMAIL_ENVIADO' => 'Email  Enviado',
            'OFERTA_CREDITO' => 'Oferta  Credito',
            'ENVIO_SMS_1' => 'Envio  Sms 1',
            'ENVIO_SMS_2' => 'Envio  Sms 2',
            'ENVIO_SMS_3' => 'Envio  Sms 3',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'DATAAT' => 'Dataat',
            'USUARIOAT' => 'Usuarioat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
