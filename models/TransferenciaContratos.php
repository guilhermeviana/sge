<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transferencia_contratos".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR_ORIGEM
 * @property int $CORRETOR_DESTINO
 * @property int $PRODUTO_ORIGEM
 * @property int $PRODUTO_DESTINO
 * @property int $EMPRESTIMO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class TransferenciaContratos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transferencia_contratos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR_ORIGEM', 'CORRETOR_DESTINO', 'PRODUTO_ORIGEM', 'PRODUTO_DESTINO', 'EMPRESTIMO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
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
            'CORRETOR_ORIGEM' => 'Corretor  Origem',
            'CORRETOR_DESTINO' => 'Corretor  Destino',
            'PRODUTO_ORIGEM' => 'Produto  Origem',
            'PRODUTO_DESTINO' => 'Produto  Destino',
            'EMPRESTIMO' => 'Emprestimo',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
