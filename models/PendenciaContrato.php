<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendencia_contrato".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $PENDENCIA
 * @property string $DATA
 * @property string $OBSERVACAO
 * @property int $TIPO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property string $DATAAT
 * @property string $USUARIOAT
 * @property int $EXCLUIDO
 * @property int $CADASTRADO
 * @property int $CLIENTE
 * @property int $AGENTE
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $VALOR_EMPRESTADO
 * @property int $PARCELAS
 * @property double $VALOR_PARCELA
 * @property int $IGNORAR_BLOQUEIO
 */
class PendenciaContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendencia_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'PENDENCIA', 'TIPO', 'EXCLUIDO', 'CADASTRADO', 'CLIENTE', 'AGENTE', 'PRODUTO', 'CATEGORIA', 'PARCELAS', 'IGNORAR_BLOQUEIO'], 'integer'],
            [['DATA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['VALOR_EMPRESTADO', 'VALOR_PARCELA'], 'number'],
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
            'EMPRESTIMO' => 'Emprestimo',
            'PENDENCIA' => 'Pendencia',
            'DATA' => 'Data',
            'OBSERVACAO' => 'Observacao',
            'TIPO' => 'Tipo',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'DATAAT' => 'Dataat',
            'USUARIOAT' => 'Usuarioat',
            'EXCLUIDO' => 'Excluido',
            'CADASTRADO' => 'Cadastrado',
            'CLIENTE' => 'Cliente',
            'AGENTE' => 'Agente',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'VALOR_EMPRESTADO' => 'Valor  Emprestado',
            'PARCELAS' => 'Parcelas',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'IGNORAR_BLOQUEIO' => 'Ignorar  Bloqueio',
        ];
    }
}
