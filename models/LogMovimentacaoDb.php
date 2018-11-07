<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_movimentacao_db".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $SQL
 * @property string $STR_SQL
 * @property string $TABELA
 * @property string $DATA
 * @property string $USUARIO
 */
class LogMovimentacaoDb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_movimentacao_db';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO'], 'integer'],
            [['SQL', 'STR_SQL'], 'string'],
            [['DATA'], 'safe'],
            [['TABELA', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO' => 'Tipo',
            'SQL' => 'Sql',
            'STR_SQL' => 'Str  Sql',
            'TABELA' => 'Tabela',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
        ];
    }
}
