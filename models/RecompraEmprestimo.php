<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recompra_emprestimo".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
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
class RecompraEmprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recompra_emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'ESTADO', 'MARGEM_LIBERADA', 'EXCLUIDO'], 'integer'],
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
            'EMPRESTIMO' => 'Emprestimo',
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
