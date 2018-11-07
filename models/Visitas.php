<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visitas".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $CAPTADOR
 * @property string $DATA_INICIO
 * @property string $DATA_TERMINO
 * @property string $HORA_INICIO
 * @property string $HORA_TERMINO
 * @property int $SATISFACAO
 * @property int $ROTA_ATENDIMENTO
 * @property int $CORRETOR
 * @property string $NOME
 * @property string $TELEFONE
 * @property string $CIDADE
 * @property string $INSTITUICAO
 * @property string $SETOR
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $CONFERENCIA_VISITA
 * @property string $USUARIO
 * @property string $DATAAT
 * @property string $USUARIOAT
 * @property int $EXCLUIDO
 */
class Visitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CAPTADOR', 'SATISFACAO', 'ROTA_ATENDIMENTO', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['DATA_INICIO', 'DATA_TERMINO', 'HORA_INICIO', 'HORA_TERMINO', 'DATAREGISTRO', 'CONFERENCIA_VISITA', 'DATAAT'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'CIDADE', 'INSTITUICAO', 'SETOR', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['TELEFONE'], 'string', 'max' => 12],
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
            'CAPTADOR' => 'Captador',
            'DATA_INICIO' => 'Data  Inicio',
            'DATA_TERMINO' => 'Data  Termino',
            'HORA_INICIO' => 'Hora  Inicio',
            'HORA_TERMINO' => 'Hora  Termino',
            'SATISFACAO' => 'Satisfacao',
            'ROTA_ATENDIMENTO' => 'Rota  Atendimento',
            'CORRETOR' => 'Corretor',
            'NOME' => 'Nome',
            'TELEFONE' => 'Telefone',
            'CIDADE' => 'Cidade',
            'INSTITUICAO' => 'Instituicao',
            'SETOR' => 'Setor',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'CONFERENCIA_VISITA' => 'Conferencia  Visita',
            'USUARIO' => 'Usuario',
            'DATAAT' => 'Dataat',
            'USUARIOAT' => 'Usuarioat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
