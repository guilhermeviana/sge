<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocolo_documentos_enviados".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $DATA_ENVIO
 * @property string $CPF
 * @property string $NOME
 * @property int $DOC_IDENTIDADE
 * @property int $DOC_CPF
 * @property int $DOC_CNH
 * @property int $DOC_CT
 * @property int $DOC_COMPROVANTE_ENDERECO
 * @property int $DOC_CONTRA_CHEQUE
 * @property int $DOC_DECLARACAO_ISENTO
 * @property int $DOC_ADF
 * @property int $DOC_CPF_CONJUGE
 * @property int $DOC_IDENTIDADE_CONJUGE
 * @property int $MASP_SIAPE
 * @property int $DOC_BOLETA_RECUPERA
 * @property int $DOC_RECIBO_OP
 * @property int $DOC_RECIBO_RECOMPRA
 * @property int $OUTROS
 * @property string $ITENS_OUTROS
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ProtocoloDocumentosEnviados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'protocolo_documentos_enviados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'DOC_IDENTIDADE', 'DOC_CPF', 'DOC_CNH', 'DOC_CT', 'DOC_COMPROVANTE_ENDERECO', 'DOC_CONTRA_CHEQUE', 'DOC_DECLARACAO_ISENTO', 'DOC_ADF', 'DOC_CPF_CONJUGE', 'DOC_IDENTIDADE_CONJUGE', 'MASP_SIAPE', 'DOC_BOLETA_RECUPERA', 'DOC_RECIBO_OP', 'DOC_RECIBO_RECOMPRA', 'OUTROS', 'EXCLUIDO'], 'integer'],
            [['DATA_ENVIO', 'DATA_REGISTRO'], 'safe'],
            [['ITENS_OUTROS'], 'string'],
            [['CPF'], 'string', 'max' => 14],
            [['NOME', 'USUARIO'], 'string', 'max' => 50],
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
            'DATA_ENVIO' => 'Data  Envio',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'DOC_IDENTIDADE' => 'Doc  Identidade',
            'DOC_CPF' => 'Doc  Cpf',
            'DOC_CNH' => 'Doc  Cnh',
            'DOC_CT' => 'Doc  Ct',
            'DOC_COMPROVANTE_ENDERECO' => 'Doc  Comprovante  Endereco',
            'DOC_CONTRA_CHEQUE' => 'Doc  Contra  Cheque',
            'DOC_DECLARACAO_ISENTO' => 'Doc  Declaracao  Isento',
            'DOC_ADF' => 'Doc  Adf',
            'DOC_CPF_CONJUGE' => 'Doc  Cpf  Conjuge',
            'DOC_IDENTIDADE_CONJUGE' => 'Doc  Identidade  Conjuge',
            'MASP_SIAPE' => 'Masp  Siape',
            'DOC_BOLETA_RECUPERA' => 'Doc  Boleta  Recupera',
            'DOC_RECIBO_OP' => 'Doc  Recibo  Op',
            'DOC_RECIBO_RECOMPRA' => 'Doc  Recibo  Recompra',
            'OUTROS' => 'Outros',
            'ITENS_OUTROS' => 'Itens  Outros',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
