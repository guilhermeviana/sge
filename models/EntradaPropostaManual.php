<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrada_proposta_manual".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $REGISTRO_ENTRADA_WEB
 * @property int $CORRETOR
 * @property string $DATA
 * @property string $HORA
 * @property string $CONFERIDO
 * @property int $ANALISTA
 * @property int $FORMA_ENVIO
 * @property int $PROTOCOLO
 * @property int $ULTIMA_RESPOSTA
 * @property string $ULTIMA_MENSAGEM
 * @property string $DATA_ULTIMA_RESPOSTA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class EntradaPropostaManual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrada_proposta_manual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'REGISTRO_ENTRADA_WEB', 'CORRETOR', 'ANALISTA', 'FORMA_ENVIO', 'PROTOCOLO', 'ULTIMA_RESPOSTA', 'EXCLUIDO'], 'integer'],
            [['DATA', 'HORA', 'CONFERIDO', 'DATA_ULTIMA_RESPOSTA', 'DATAREGISTRO'], 'safe'],
            [['ULTIMA_MENSAGEM'], 'string'],
            [['USUARIO'], 'string', 'max' => 50],
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
            'REGISTRO_ENTRADA_WEB' => 'Registro  Entrada  Web',
            'CORRETOR' => 'Corretor',
            'DATA' => 'Data',
            'HORA' => 'Hora',
            'CONFERIDO' => 'Conferido',
            'ANALISTA' => 'Analista',
            'FORMA_ENVIO' => 'Forma  Envio',
            'PROTOCOLO' => 'Protocolo',
            'ULTIMA_RESPOSTA' => 'Ultima  Resposta',
            'ULTIMA_MENSAGEM' => 'Ultima  Mensagem',
            'DATA_ULTIMA_RESPOSTA' => 'Data  Ultima  Resposta',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
