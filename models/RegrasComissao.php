<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regras_comissao".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property string $VIGENCIA
 * @property int $PARCELA_INICIO
 * @property int $PARCELA_FINAL
 * @property int $IDADE_INICIO
 * @property int $IDADE_FINAL
 * @property double $PERCENTUAL_REFIN_INICIO
 * @property double $PERCENTUAL_REFIN_FINAL
 * @property int $EXCLUIDO
 */
class RegrasComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regras_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['VIGENCIA'], 'safe'],
            [['PARCELA_INICIO', 'PARCELA_FINAL', 'IDADE_INICIO', 'IDADE_FINAL', 'EXCLUIDO'], 'integer'],
            [['PERCENTUAL_REFIN_INICIO', 'PERCENTUAL_REFIN_FINAL'], 'number'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['REFERENCIA'], 'string', 'max' => 10],
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
            'REFERENCIA' => 'Referencia',
            'OBSERVACAO' => 'Observacao',
            'VIGENCIA' => 'Vigencia',
            'PARCELA_INICIO' => 'Parcela  Inicio',
            'PARCELA_FINAL' => 'Parcela  Final',
            'IDADE_INICIO' => 'Idade  Inicio',
            'IDADE_FINAL' => 'Idade  Final',
            'PERCENTUAL_REFIN_INICIO' => 'Percentual  Refin  Inicio',
            'PERCENTUAL_REFIN_FINAL' => 'Percentual  Refin  Final',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
