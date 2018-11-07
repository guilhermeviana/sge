<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus_producao_agente".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property int $VERSAO_BONUS
 * @property string $DESCRICAO
 * @property int $TIPO_BONUS
 * @property int $TIPO_PAGAMENTO
 * @property int $TODOS_PARCEIROS
 * @property int $PARCEIRO
 * @property int $TODOS_TIPOS_PRODUTO
 * @property int $TODOS_PRODUTOS
 * @property int $PRODUTO
 * @property int $TODAS_CATEGORIAS
 * @property int $CATEGORIA
 * @property string $PARCELAS
 * @property int $REGRA
 * @property int $ENTRE_VALORES
 * @property int $TIPO_DATA
 * @property double $VALOR_INICIO
 * @property double $VALOR_FINAL
 * @property int $CONTRATOS_INI
 * @property int $CONTRATOS_FIM
 * @property int $AJUDA_CUSTO
 * @property double $BONUS
 * @property int $CAMPO_CALCULO
 * @property int $FORMA_CALCULO
 * @property int $TODOS_CORRETORES
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BonusProducaoAgente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus_producao_agente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'VERSAO_BONUS', 'TIPO_BONUS', 'TIPO_PAGAMENTO', 'TODOS_PARCEIROS', 'PARCEIRO', 'TODOS_TIPOS_PRODUTO', 'TODOS_PRODUTOS', 'PRODUTO', 'TODAS_CATEGORIAS', 'CATEGORIA', 'REGRA', 'ENTRE_VALORES', 'TIPO_DATA', 'CONTRATOS_INI', 'CONTRATOS_FIM', 'AJUDA_CUSTO', 'CAMPO_CALCULO', 'FORMA_CALCULO', 'TODOS_CORRETORES', 'EXCLUIDO'], 'integer'],
            [['VALOR_INICIO', 'VALOR_FINAL', 'BONUS'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['PARCELAS'], 'string', 'max' => 255],
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
            'ATIVO' => 'Ativo',
            'VERSAO_BONUS' => 'Versao  Bonus',
            'DESCRICAO' => 'Descricao',
            'TIPO_BONUS' => 'Tipo  Bonus',
            'TIPO_PAGAMENTO' => 'Tipo  Pagamento',
            'TODOS_PARCEIROS' => 'Todos  Parceiros',
            'PARCEIRO' => 'Parceiro',
            'TODOS_TIPOS_PRODUTO' => 'Todos  Tipos  Produto',
            'TODOS_PRODUTOS' => 'Todos  Produtos',
            'PRODUTO' => 'Produto',
            'TODAS_CATEGORIAS' => 'Todas  Categorias',
            'CATEGORIA' => 'Categoria',
            'PARCELAS' => 'Parcelas',
            'REGRA' => 'Regra',
            'ENTRE_VALORES' => 'Entre  Valores',
            'TIPO_DATA' => 'Tipo  Data',
            'VALOR_INICIO' => 'Valor  Inicio',
            'VALOR_FINAL' => 'Valor  Final',
            'CONTRATOS_INI' => 'Contratos  Ini',
            'CONTRATOS_FIM' => 'Contratos  Fim',
            'AJUDA_CUSTO' => 'Ajuda  Custo',
            'BONUS' => 'Bonus',
            'CAMPO_CALCULO' => 'Campo  Calculo',
            'FORMA_CALCULO' => 'Forma  Calculo',
            'TODOS_CORRETORES' => 'Todos  Corretores',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
