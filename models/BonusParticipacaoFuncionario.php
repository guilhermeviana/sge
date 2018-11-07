<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_participacao_funcionario".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property int $PARCEIRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $ENTRE_VALORES
 * @property int $FORMA_SOMA_PRODUCAO
 * @property double $VALOR_INICIO
 * @property double $VALOR_FINAL
 * @property int $CONTRATOS_INI
 * @property int $CONTRATOS_FIM
 * @property double $BONUS
 * @property int $CAMPO_CALCULO
 * @property int $FORMA_CALCULO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusParticipacaoFuncionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_participacao_funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCEIRO', 'PRODUTO', 'CATEGORIA', 'REGRA', 'ENTRE_VALORES', 'FORMA_SOMA_PRODUCAO', 'CONTRATOS_INI', 'CONTRATOS_FIM', 'CAMPO_CALCULO', 'FORMA_CALCULO', 'EXCLUIDO'], 'integer'],
            [['VALOR_INICIO', 'VALOR_FINAL', 'BONUS'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DESCRICAO' => 'Descricao',
            'PARCEIRO' => 'Parceiro',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'ENTRE_VALORES' => 'Entre  Valores',
            'FORMA_SOMA_PRODUCAO' => 'Forma  Soma  Producao',
            'VALOR_INICIO' => 'Valor  Inicio',
            'VALOR_FINAL' => 'Valor  Final',
            'CONTRATOS_INI' => 'Contratos  Ini',
            'CONTRATOS_FIM' => 'Contratos  Fim',
            'BONUS' => 'Bonus',
            'CAMPO_CALCULO' => 'Campo  Calculo',
            'FORMA_CALCULO' => 'Forma  Calculo',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
