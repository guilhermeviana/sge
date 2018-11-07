<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alteracao_tabela".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $REGISTRO_ALTERADO
 * @property string $SQL
 * @property string $USUARIO
 * @property string $DATAALTERACAO
 */
class AlteracaoTabela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alteracao_tabela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_ALTERADO'], 'integer'],
            [['SQL'], 'string'],
            [['DATAALTERACAO'], 'safe'],
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
            'TABELA' => 'Tabela',
            'REGISTRO_ALTERADO' => 'Registro  Alterado',
            'SQL' => 'Sql',
            'USUARIO' => 'Usuario',
            'DATAALTERACAO' => 'Dataalteracao',
        ];
    }
}
