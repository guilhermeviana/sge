<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_tipo_tabela_especial".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $TIPO_TABELA
 * @property double $COMISSAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ItensTipoTabelaEspecial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_tipo_tabela_especial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'REGRA', 'TIPO_TABELA', 'EXCLUIDO'], 'integer'],
            [['COMISSAO'], 'number'],
            [['DATAREGISTRO'], 'safe'],
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
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'TIPO_TABELA' => 'Tipo  Tabela',
            'COMISSAO' => 'Comissao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
