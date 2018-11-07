<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fatores".
 *
 * @property int $REGISTRO
 * @property int $STATUS
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property string $DATA_INICIO
 * @property string $DATA_FINAL
 * @property int $PRAZO
 * @property double $FATOR
 * @property double $JUROS
 * @property double $FATOR_IOF
 * @property int $EXCLUIDO
 */
class Fatores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'PRODUTO', 'CATEGORIA', 'PRAZO', 'EXCLUIDO'], 'integer'],
            [['DATA_INICIO', 'DATA_FINAL'], 'safe'],
            [['FATOR', 'JUROS', 'FATOR_IOF'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'STATUS' => 'Status',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'DATA_INICIO' => 'Data  Inicio',
            'DATA_FINAL' => 'Data  Final',
            'PRAZO' => 'Prazo',
            'FATOR' => 'Fator',
            'JUROS' => 'Juros',
            'FATOR_IOF' => 'Fator  Iof',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
