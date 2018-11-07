<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_p_contratos".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $CPF
 * @property string $NOME
 * @property string $ITENS_CONTRATO
 * @property int $EXCLUIDO
 * @property int $PRODUTO
 */
class ItensCorrespondenciaPContratos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_p_contratos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'EXCLUIDO', 'PRODUTO'], 'integer'],
            [['ITENS_CONTRATO'], 'string'],
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
            'ITENS_CONTRATO' => 'Itens  Contrato',
            'EXCLUIDO' => 'Excluido',
            'PRODUTO' => 'Produto',
        ];
    }
}
