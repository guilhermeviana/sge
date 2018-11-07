<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_atendente".
 *
 * @property int $REGISTRO
 * @property int $ATENDENTE
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $COMISSAO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $REGRA
 */
class TabelaComissaoAtendente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_atendente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATENDENTE', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO', 'REGRA'], 'integer'],
            [['COMISSAO'], 'number'],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATENDENTE' => 'Atendente',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'COMISSAO' => 'Comissao',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'REGRA' => 'Regra',
        ];
    }
}
