<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telemarketing".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $DATA
 * @property string $HORA
 * @property int $CLIENTE
 * @property string $NOME
 * @property string $CIDADE
 * @property string $INSTITUICAO
 * @property string $SETOR
 * @property int $TIPO_LIGACAO
 * @property string $TELEFONE
 * @property int $SATISFACAO
 * @property int $REALIZADO
 * @property string $CONTRATO
 * @property string $OBS
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $USUARIOAT
 * @property string $DATAAT
 * @property int $EXCLUIDO
 */
class Telemarketing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telemarketing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CLIENTE', 'TIPO_LIGACAO', 'SATISFACAO', 'REALIZADO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['OBS'], 'string'],
            [['NOME', 'CIDADE', 'INSTITUICAO', 'SETOR', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['TELEFONE'], 'string', 'max' => 12],
            [['CONTRATO'], 'string', 'max' => 20],
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
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'CLIENTE' => 'Cliente',
            'NOME' => 'Nome',
            'CIDADE' => 'Cidade',
            'INSTITUICAO' => 'Instituicao',
            'SETOR' => 'Setor',
            'TIPO_LIGACAO' => 'Tipo  Ligacao',
            'TELEFONE' => 'Telefone',
            'SATISFACAO' => 'Satisfacao',
            'REALIZADO' => 'Realizado',
            'CONTRATO' => 'Contrato',
            'OBS' => 'Obs',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIOAT' => 'Usuarioat',
            'DATAAT' => 'Dataat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
