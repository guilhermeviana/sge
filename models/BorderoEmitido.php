<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bordero_emitido".
 *
 * @property int $REGISTRO
 * @property int $TIPO_BORDERO
 * @property string $NUMERO_BORDERO_BANCO
 * @property string $DATA
 * @property string $USUARIO
 * @property string $RELATORIO
 * @property int $PORHORA
 * @property string $DATAINICIO
 * @property string $HORAINICIO
 * @property string $DATAFINAL
 * @property string $HORAFINAL
 * @property string $DESCRICAO
 * @property int $STATUS
 * @property string $OBSERVACAO
 * @property string $USUARIO_CONFERIDO
 * @property string $DATA_CONFERIDO
 * @property int $EXCLUIDO
 */
class BorderoEmitido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bordero_emitido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_BORDERO', 'PORHORA', 'STATUS', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAINICIO', 'HORAINICIO', 'DATAFINAL', 'HORAFINAL', 'DATA_CONFERIDO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['NUMERO_BORDERO_BANCO'], 'string', 'max' => 20],
            [['USUARIO', 'RELATORIO', 'USUARIO_CONFERIDO'], 'string', 'max' => 50],
            [['DESCRICAO'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO_BORDERO' => 'Tipo  Bordero',
            'NUMERO_BORDERO_BANCO' => 'Numero  Bordero  Banco',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'RELATORIO' => 'Relatorio',
            'PORHORA' => 'Porhora',
            'DATAINICIO' => 'Datainicio',
            'HORAINICIO' => 'Horainicio',
            'DATAFINAL' => 'Datafinal',
            'HORAFINAL' => 'Horafinal',
            'DESCRICAO' => 'Descricao',
            'STATUS' => 'Status',
            'OBSERVACAO' => 'Observacao',
            'USUARIO_CONFERIDO' => 'Usuario  Conferido',
            'DATA_CONFERIDO' => 'Data  Conferido',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
