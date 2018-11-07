<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_tipo_tabela_base_comissao_agente".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $TIPO_TABELA
 * @property double $BASE_COMISSAO
 * @property int $CAMPO_BASE
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ItensTipoTabelaBaseComissaoAgente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_tipo_tabela_base_comissao_agente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'REGRA', 'TIPO_TABELA', 'CAMPO_BASE', 'EXCLUIDO'], 'integer'],
            [['BASE_COMISSAO'], 'number'],
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
            'BASE_COMISSAO' => 'Base  Comissao',
            'CAMPO_BASE' => 'Campo  Base',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
