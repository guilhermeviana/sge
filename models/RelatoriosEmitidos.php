<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relatorios_emitidos".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property string $USUARIO
 * @property string $IP
 * @property string $MAQUINA
 * @property string $DESCRICAO
 * @property int $IMPRESSO
 * @property int $ENVIADO_EMAIL
 * @property int $EXPORTADO
 * @property string $FORMATO_EXPORTACAO
 * @property int $PAGINAS
 * @property string $ARQUIVO
 * @property int $EXCLUIDO
 */
class RelatoriosEmitidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relatorios_emitidos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA'], 'safe'],
            [['IMPRESSO', 'ENVIADO_EMAIL', 'EXPORTADO', 'PAGINAS', 'EXCLUIDO'], 'integer'],
            [['ARQUIVO'], 'string'],
            [['USUARIO', 'MAQUINA'], 'string', 'max' => 50],
            [['IP'], 'string', 'max' => 16],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['FORMATO_EXPORTACAO'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'IP' => 'Ip',
            'MAQUINA' => 'Maquina',
            'DESCRICAO' => 'Descricao',
            'IMPRESSO' => 'Impresso',
            'ENVIADO_EMAIL' => 'Enviado  Email',
            'EXPORTADO' => 'Exportado',
            'FORMATO_EXPORTACAO' => 'Formato  Exportacao',
            'PAGINAS' => 'Paginas',
            'ARQUIVO' => 'Arquivo',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
