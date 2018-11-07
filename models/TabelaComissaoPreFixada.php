<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_pre_fixada".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO_ALVO
 * @property int $CATEGORIA_ALVO
 * @property int $REGRA_ALVO
 * @property double $PERCENTUAL
 * @property int $PRODUTO_BASE
 * @property int $CATEGORIA_BASE
 * @property int $REGRA_BASE
 * @property string $USUARIO
 * @property string $DATA_REGISTRO
 * @property int $EXCLUIDO
 */
class TabelaComissaoPreFixada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_pre_fixada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO_ALVO', 'CATEGORIA_ALVO', 'REGRA_ALVO', 'PRODUTO_BASE', 'CATEGORIA_BASE', 'REGRA_BASE', 'EXCLUIDO'], 'integer'],
            [['PERCENTUAL'], 'number'],
            [['DATA_REGISTRO'], 'safe'],
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
            'PRODUTO_ALVO' => 'Produto  Alvo',
            'CATEGORIA_ALVO' => 'Categoria  Alvo',
            'REGRA_ALVO' => 'Regra  Alvo',
            'PERCENTUAL' => 'Percentual',
            'PRODUTO_BASE' => 'Produto  Base',
            'CATEGORIA_BASE' => 'Categoria  Base',
            'REGRA_BASE' => 'Regra  Base',
            'USUARIO' => 'Usuario',
            'DATA_REGISTRO' => 'Data  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
