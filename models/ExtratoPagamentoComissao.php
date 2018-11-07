<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "extrato_pagamento_comissao".
 *
 * @property int $REGISTRO
 * @property int $ORIGEM
 * @property int $CORRETOR
 * @property string $DESCRICAO
 * @property string $DATA
 * @property double $VALOR
 * @property int $ENTRADA
 * @property int $REGISTRO_EMPRESTIMO
 * @property string $DATAREG
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ExtratoPagamentoComissao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'extrato_pagamento_comissao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORIGEM', 'CORRETOR', 'ENTRADA', 'REGISTRO_EMPRESTIMO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREG'], 'safe'],
            [['VALOR'], 'number'],
            [['DESCRICAO'], 'string', 'max' => 255],
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
            'ORIGEM' => 'Origem',
            'CORRETOR' => 'Corretor',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'VALOR' => 'Valor',
            'ENTRADA' => 'Entrada',
            'REGISTRO_EMPRESTIMO' => 'Registro  Emprestimo',
            'DATAREG' => 'Datareg',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
