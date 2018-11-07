<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_conciliacao_bancaria".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $CONTA
 * @property string $DATA
 * @property string $USUARIO
 * @property string $OBSERVACAO
 * @property string $DATA_REGISTRO
 * @property string $DATA_PROCESSAMENTO
 * @property string $ARQUIVO_BANCO
 * @property string $MD5_ARQUIVO_BANCO
 * @property int $EXCLUIDO
 */
class FinConciliacaoBancaria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_conciliacao_bancaria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'CONTA', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATA_REGISTRO', 'DATA_PROCESSAMENTO'], 'safe'],
            [['OBSERVACAO', 'ARQUIVO_BANCO'], 'string'],
            [['USUARIO', 'MD5_ARQUIVO_BANCO'], 'string', 'max' => 50],
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
            'CONTA' => 'Conta',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'OBSERVACAO' => 'Observacao',
            'DATA_REGISTRO' => 'Data  Registro',
            'DATA_PROCESSAMENTO' => 'Data  Processamento',
            'ARQUIVO_BANCO' => 'Arquivo  Banco',
            'MD5_ARQUIVO_BANCO' => 'Md5  Arquivo  Banco',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
