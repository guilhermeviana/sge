<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "socios_agente".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $CPF
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $IDENTIDADE
 * @property string $TELEFONE
 * @property string $PAI
 * @property string $MAE
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $CEP
 * @property string $UF
 * @property int $EXCLUIDO
 */
class SociosAgente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'socios_agente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['NASCIMENTO'], 'safe'],
            [['CPF'], 'string', 'max' => 11],
            [['NOME', 'PAI', 'MAE', 'ENDERECO'], 'string', 'max' => 100],
            [['IDENTIDADE'], 'string', 'max' => 20],
            [['TELEFONE'], 'string', 'max' => 12],
            [['BAIRRO', 'CIDADE'], 'string', 'max' => 50],
            [['CEP'], 'string', 'max' => 8],
            [['UF'], 'string', 'max' => 2],
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
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'IDENTIDADE' => 'Identidade',
            'TELEFONE' => 'Telefone',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'CEP' => 'Cep',
            'UF' => 'Uf',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
