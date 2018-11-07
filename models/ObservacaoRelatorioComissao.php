<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "observacao_relatorio_comissao".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $DATA
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class ObservacaoRelatorioComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'observacao_relatorio_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
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
            'CORRETOR' => 'Corretor',
            'DATA' => 'Data',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
