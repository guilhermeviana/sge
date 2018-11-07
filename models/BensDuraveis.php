<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bens_duraveis".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property string $DESCRICAO
 * @property double $VALOR
 * @property double $VALOR_BEM
 * @property string $PREV_ENTREGA
 * @property int $ESTADO
 * @property int $BEM_LIBERADO
 * @property string $DATA_LIBERACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BensDuraveis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bens_duraveis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'ESTADO', 'BEM_LIBERADO', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_BEM'], 'number'],
            [['PREV_ENTREGA', 'DATA_LIBERACAO', 'DATAREGISTRO'], 'safe'],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
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
            'DESCRICAO' => 'Descricao',
            'VALOR' => 'Valor',
            'VALOR_BEM' => 'Valor  Bem',
            'PREV_ENTREGA' => 'Prev  Entrega',
            'ESTADO' => 'Estado',
            'BEM_LIBERADO' => 'Bem  Liberado',
            'DATA_LIBERACAO' => 'Data  Liberacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
