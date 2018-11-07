<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo_bordero".
 *
 * @property int $REGISTRO
 * @property int $BORDERO
 * @property int $EMPRESTIMO
 * @property string $NUMERO_BORDERO_BANCO
 * @property int $STATUS
 * @property string $USUARIO_CONFERIDO
 * @property string $DATA_CONFERIDO
 * @property int $EXCLUIDO
 */
class EmprestimoBordero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo_bordero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BORDERO', 'EMPRESTIMO', 'STATUS', 'EXCLUIDO'], 'integer'],
            [['DATA_CONFERIDO'], 'safe'],
            [['NUMERO_BORDERO_BANCO'], 'string', 'max' => 20],
            [['USUARIO_CONFERIDO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'BORDERO' => 'Bordero',
            'EMPRESTIMO' => 'Emprestimo',
            'NUMERO_BORDERO_BANCO' => 'Numero  Bordero  Banco',
            'STATUS' => 'Status',
            'USUARIO_CONFERIDO' => 'Usuario  Conferido',
            'DATA_CONFERIDO' => 'Data  Conferido',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
