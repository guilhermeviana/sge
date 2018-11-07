<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "checklist_operacional_recompra".
 *
 * @property int $REGISTRO
 * @property int $CHECKLIST
 * @property string $BANCO
 * @property double $VALOR
 * @property double $VALOR_PARCELA
 * @property string $VENCIMENTO
 * @property int $ESTADO
 * @property int $MARGEM_LIBERADA
 * @property string $DATA_LIBERACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ChecklistOperacionalRecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_operacional_recompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CHECKLIST', 'ESTADO', 'MARGEM_LIBERADA', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_PARCELA'], 'number'],
            [['VENCIMENTO', 'DATA_LIBERACAO', 'DATAREGISTRO'], 'safe'],
            [['BANCO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CHECKLIST' => 'Checklist',
            'BANCO' => 'Banco',
            'VALOR' => 'Valor',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'VENCIMENTO' => 'Vencimento',
            'ESTADO' => 'Estado',
            'MARGEM_LIBERADA' => 'Margem  Liberada',
            'DATA_LIBERACAO' => 'Data  Liberacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
