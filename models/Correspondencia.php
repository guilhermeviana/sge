<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correspondencia".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $CORRETOR
 * @property int $PARCEIRO
 * @property int $FUNCIONARIO
 * @property int $CLIENTE
 * @property int $FORNECEDOR
 * @property int $REMETENTE_DESTINATARIO
 * @property int $CIDADE
 * @property string $UF
 * @property string $DATA
 * @property string $HORA
 * @property int $FORMAENVIO
 * @property double $VALOR_ENVIO
 * @property string $IDENTIFICADOR_CORRESP
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $USUARIOAT
 * @property string $DATAAT
 * @property int $EXCLUIDO
 */
class Correspondencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'correspondencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CORRETOR', 'PARCEIRO', 'FUNCIONARIO', 'CLIENTE', 'FORNECEDOR', 'REMETENTE_DESTINATARIO', 'CIDADE', 'FORMAENVIO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['VALOR_ENVIO'], 'number'],
            [['UF'], 'string', 'max' => 2],
            [['IDENTIFICADOR_CORRESP'], 'string', 'max' => 30],
            [['USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
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
            'CORRETOR' => 'Corretor',
            'PARCEIRO' => 'Parceiro',
            'FUNCIONARIO' => 'Funcionario',
            'CLIENTE' => 'Cliente',
            'FORNECEDOR' => 'Fornecedor',
            'REMETENTE_DESTINATARIO' => 'Remetente  Destinatario',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'FORMAENVIO' => 'Formaenvio',
            'VALOR_ENVIO' => 'Valor  Envio',
            'IDENTIFICADOR_CORRESP' => 'Identificador  Corresp',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIOAT' => 'Usuarioat',
            'DATAAT' => 'Dataat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
