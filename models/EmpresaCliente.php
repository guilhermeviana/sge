<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa_cliente".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $CNPJ
 * @property string $DESCRICAO
 * @property int $DIA_VENC
 * @property int $TIPO_VENC
 * @property string $TELEFONE
 * @property string $TELEFONE_2
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $CONTATO
 * @property string $CEL_CONTATO
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class EmpresaCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'DIA_VENC', 'TIPO_VENC', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['CNPJ'], 'string', 'max' => 14],
            [['DESCRICAO', 'BAIRRO', 'CIDADE', 'CONTATO', 'USUARIO'], 'string', 'max' => 50],
            [['TELEFONE', 'TELEFONE_2', 'CEL_CONTATO'], 'string', 'max' => 12],
            [['ENDERECO'], 'string', 'max' => 100],
            [['UF'], 'string', 'max' => 2],
            [['CEP'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO' => 'Tipo',
            'CNPJ' => 'Cnpj',
            'DESCRICAO' => 'Descricao',
            'DIA_VENC' => 'Dia  Venc',
            'TIPO_VENC' => 'Tipo  Venc',
            'TELEFONE' => 'Telefone',
            'TELEFONE_2' => 'Telefone 2',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'CONTATO' => 'Contato',
            'CEL_CONTATO' => 'Cel  Contato',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
