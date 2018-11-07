<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cobertura_apolice".
 *
 * @property int $REGISTRO
 * @property int $APOLICE
 * @property int $COBERTURA
 * @property double $VALOR_TITULAR
 * @property double $VALOR
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class CoberturaApolice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cobertura_apolice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['APOLICE', 'COBERTURA', 'EXCLUIDO'], 'integer'],
            [['VALOR_TITULAR', 'VALOR'], 'number'],
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
            'APOLICE' => 'Apolice',
            'COBERTURA' => 'Cobertura',
            'VALOR_TITULAR' => 'Valor  Titular',
            'VALOR' => 'Valor',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
