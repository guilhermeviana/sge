<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_documentos".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $CPF
 * @property string $NOME
 * @property int $DOC_IDENTIDADE
 * @property int $DOC_CPF
 * @property int $DOC_CNH
 * @property int $DOC_CT
 * @property int $DOC_COMPROVANTE_ENDERECO
 * @property int $DOC_CONTRA_CHEQUE
 * @property int $DOC_DECLARACAO_ISENTO
 * @property int $DOC_NADA_CONSTA
 * @property int $DOC_CPF_CONJUGE
 * @property int $DOC_IDENTIDADE_CONJUGE
 * @property int $MASP_SIAPE
 * @property int $DOC_BOLETA_RECUPERA
 * @property int $DOC_RECIBO_OP
 * @property int $OUTROS
 * @property string $ITENS_OUTROS
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaDocumentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_documentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'DOC_IDENTIDADE', 'DOC_CPF', 'DOC_CNH', 'DOC_CT', 'DOC_COMPROVANTE_ENDERECO', 'DOC_CONTRA_CHEQUE', 'DOC_DECLARACAO_ISENTO', 'DOC_NADA_CONSTA', 'DOC_CPF_CONJUGE', 'DOC_IDENTIDADE_CONJUGE', 'MASP_SIAPE', 'DOC_BOLETA_RECUPERA', 'DOC_RECIBO_OP', 'OUTROS', 'EXCLUIDO'], 'integer'],
            [['ITENS_OUTROS'], 'string'],
            [['CPF'], 'string', 'max' => 14],
            [['NOME'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'DOC_IDENTIDADE' => 'Doc  Identidade',
            'DOC_CPF' => 'Doc  Cpf',
            'DOC_CNH' => 'Doc  Cnh',
            'DOC_CT' => 'Doc  Ct',
            'DOC_COMPROVANTE_ENDERECO' => 'Doc  Comprovante  Endereco',
            'DOC_CONTRA_CHEQUE' => 'Doc  Contra  Cheque',
            'DOC_DECLARACAO_ISENTO' => 'Doc  Declaracao  Isento',
            'DOC_NADA_CONSTA' => 'Doc  Nada  Consta',
            'DOC_CPF_CONJUGE' => 'Doc  Cpf  Conjuge',
            'DOC_IDENTIDADE_CONJUGE' => 'Doc  Identidade  Conjuge',
            'MASP_SIAPE' => 'Masp  Siape',
            'DOC_BOLETA_RECUPERA' => 'Doc  Boleta  Recupera',
            'DOC_RECIBO_OP' => 'Doc  Recibo  Op',
            'OUTROS' => 'Outros',
            'ITENS_OUTROS' => 'Itens  Outros',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
