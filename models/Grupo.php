<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property int $REGISTRO
 * @property string $GRUPO
 * @property string $PERMISSAO
 * @property string $PERMISSAO_SYS
 * @property string $PARCEIROS
 * @property string $PRODUTOS
 * @property int $SENHA_EXPIRA
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PERMISSAO', 'PERMISSAO_SYS'], 'string'],
            [['SENHA_EXPIRA'], 'integer'],
            [['GRUPO'], 'string', 'max' => 50],
            [['PARCEIROS', 'PRODUTOS'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'GRUPO' => 'Grupo',
            'PERMISSAO' => 'Permissao',
            'PERMISSAO_SYS' => 'Permissao  Sys',
            'PARCEIROS' => 'Parceiros',
            'PRODUTOS' => 'Produtos',
            'SENHA_EXPIRA' => 'Senha  Expira',
        ];
    }
}
