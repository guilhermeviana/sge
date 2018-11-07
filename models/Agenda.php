<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property int $REGISTRO_LIGACAO
 * @property int $CLIENTE
 * @property string $USUARIOS
 * @property string $COMPROMISSO
 * @property string $DATA
 * @property string $HORA_INICIO
 * @property int $DURACAO
 * @property int $ALARME
 * @property int $ALERTADO
 * @property int $TODOS_DIAS
 * @property int $COR
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $USUARIO_UPDT
 * @property string $DATA_UPDT
 * @property int $EXCLUIDO
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'REGISTRO_LIGACAO', 'CLIENTE', 'DURACAO', 'ALARME', 'ALERTADO', 'TODOS_DIAS', 'COR', 'EXCLUIDO'], 'integer'],
            [['USUARIOS', 'OBSERVACAO'], 'string'],
            [['DATA', 'HORA_INICIO', 'DATAREGISTRO', 'DATA_UPDT'], 'safe'],
            [['COMPROMISSO'], 'string', 'max' => 255],
            [['USUARIO', 'USUARIO_UPDT'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATIVO' => 'Ativo',
            'REGISTRO_LIGACAO' => 'Registro  Ligacao',
            'CLIENTE' => 'Cliente',
            'USUARIOS' => 'Usuarios',
            'COMPROMISSO' => 'Compromisso',
            'DATA' => 'Data',
            'HORA_INICIO' => 'Hora  Inicio',
            'DURACAO' => 'Duracao',
            'ALARME' => 'Alarme',
            'ALERTADO' => 'Alertado',
            'TODOS_DIAS' => 'Todos  Dias',
            'COR' => 'Cor',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO_UPDT' => 'Usuario  Updt',
            'DATA_UPDT' => 'Data  Updt',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
