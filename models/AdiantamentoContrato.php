<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adiantamento_contrato".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property string $DATA
 * @property double $VALOR
 * @property string $RECEBIDO
 * @property string $APROVADO
 * @property string $USR_APROVACAO
 * @property string $OBS
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class AdiantamentoContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adiantamento_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'RECEBIDO', 'APROVADO', 'DATAREGISTRO'], 'safe'],
            [['VALOR'], 'number'],
            [['OBS'], 'string'],
            [['USR_APROVACAO', 'USUARIO'], 'string', 'max' => 50],
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
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'RECEBIDO' => 'Recebido',
            'APROVADO' => 'Aprovado',
            'USR_APROVACAO' => 'Usr  Aprovacao',
            'OBS' => 'Obs',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
