<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_tipo_tabela_rentabilidade".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $TIPO_TABELA
 * @property double $RENTABILIDADE
 * @property int $CAMPO_BASE
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ItensTipoTabelaRentabilidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_tipo_tabela_rentabilidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'REGRA', 'TIPO_TABELA', 'CAMPO_BASE', 'EXCLUIDO'], 'integer'],
            [['RENTABILIDADE'], 'number'],
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
            'RENTABILIDADE' => 'Rentabilidade',
            'CAMPO_BASE' => 'Campo  Base',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
