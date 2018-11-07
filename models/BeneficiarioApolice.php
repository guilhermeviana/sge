<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beneficiario_apolice".
 *
 * @property int $REGISTRO
 * @property int $APOLICE
 * @property string $NOME
 * @property double $VALOR
 * @property double $PORCENTAGEM
 * @property int $TITULAR
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BeneficiarioApolice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beneficiario_apolice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['APOLICE', 'TITULAR', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'PORCENTAGEM'], 'number'],
            [['DATAREGISTRO'], 'safe'],
            [['NOME', 'USUARIO'], 'string', 'max' => 50],
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
            'NOME' => 'Nome',
            'VALOR' => 'Valor',
            'PORCENTAGEM' => 'Porcentagem',
            'TITULAR' => 'Titular',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
