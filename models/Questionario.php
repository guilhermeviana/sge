<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questionario".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property string $CPF
 * @property string $NOME_CLIENTE
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property string $TELEFONE_COM
 * @property string $EMAIL
 * @property int $STATUS
 * @property string $DATA
 * @property string $USUARIO
 * @property string $DESCRICAO
 * @property string $IP
 * @property int $REGISTRO_CORRETOR
 * @property string $DATA_REGISTRO
 * @property int $EXCLUIDO
 */
class Questionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'STATUS', 'REGISTRO_CORRETOR', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATA_REGISTRO'], 'safe'],
            [['CPF'], 'string', 'max' => 14],
            [['NOME_CLIENTE'], 'string', 'max' => 100],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_COM'], 'string', 'max' => 10],
            [['EMAIL'], 'string', 'max' => 255],
            [['USUARIO'], 'string', 'max' => 50],
            [['DESCRICAO', 'IP'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'CPF' => 'Cpf',
            'NOME_CLIENTE' => 'Nome  Cliente',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'TELEFONE_COM' => 'Telefone  Com',
            'EMAIL' => 'Email',
            'STATUS' => 'Status',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'DESCRICAO' => 'Descricao',
            'IP' => 'Ip',
            'REGISTRO_CORRETOR' => 'Registro  Corretor',
            'DATA_REGISTRO' => 'Data  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
