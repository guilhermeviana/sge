<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_tac".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $PRAZO_INICIO
 * @property int $PRAZO_FINAL
 * @property double $TAC_INICIO
 * @property double $TAC_FINAL
 * @property double $TAC_BANCO
 * @property double $TAC_EMPRESA
 * @property string $USUARIO
 * @property string $DATA_REGISTRO
 * @property int $EXCLUIDO
 */
class TabelaComissaoTac extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_tac';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'PRAZO_INICIO', 'PRAZO_FINAL', 'EXCLUIDO'], 'integer'],
            [['TAC_INICIO', 'TAC_FINAL', 'TAC_BANCO', 'TAC_EMPRESA'], 'number'],
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
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'PRAZO_INICIO' => 'Prazo  Inicio',
            'PRAZO_FINAL' => 'Prazo  Final',
            'TAC_INICIO' => 'Tac  Inicio',
            'TAC_FINAL' => 'Tac  Final',
            'TAC_BANCO' => 'Tac  Banco',
            'TAC_EMPRESA' => 'Tac  Empresa',
            'USUARIO' => 'Usuario',
            'DATA_REGISTRO' => 'Data  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
