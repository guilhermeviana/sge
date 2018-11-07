<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_base_comissao_captador".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CAPTADOR
 * @property double $BASE_COMISSAO
 * @property int $CAMPO_BASE
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class TabelaBaseComissaoCaptador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_base_comissao_captador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CAPTADOR', 'CAMPO_BASE', 'EXCLUIDO'], 'integer'],
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
            'CAPTADOR' => 'Captador',
            'BASE_COMISSAO' => 'Base  Comissao',
            'CAMPO_BASE' => 'Campo  Base',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
