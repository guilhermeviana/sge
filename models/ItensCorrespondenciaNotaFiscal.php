<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_nota_fiscal".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $DATA_EMISSAO
 * @property string $NUMERO
 * @property double $VALOR
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaNotaFiscal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_nota_fiscal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'EXCLUIDO'], 'integer'],
            [['DATA_EMISSAO'], 'safe'],
            [['VALOR'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NUMERO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'DATA_EMISSAO' => 'Data  Emissao',
            'NUMERO' => 'Numero',
            'VALOR' => 'Valor',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
