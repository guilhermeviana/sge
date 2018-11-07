<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_rateio_entre_filiais".
 *
 * @property int $REGISTRO
 * @property int $REGISTRO_MOVIMENTACAO
 * @property int $CORRETOR
 * @property double $PERCENTUAL
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class FinRateioEntreFiliais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_rateio_entre_filiais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_MOVIMENTACAO', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['PERCENTUAL'], 'number'],
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
            'REGISTRO_MOVIMENTACAO' => 'Registro  Movimentacao',
            'CORRETOR' => 'Corretor',
            'PERCENTUAL' => 'Percentual',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
