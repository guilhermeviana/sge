<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_materiais".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property int $PRODUTO
 * @property int $PROPOSTA
 * @property int $CARTAZES
 * @property int $PANFLETOS
 * @property int $BANNER
 * @property int $CANETA
 * @property int $CAMISA
 * @property int $BLOCO
 * @property int $OUTROS
 * @property string $ITENS_OUTROS
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaMateriais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_materiais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'PRODUTO', 'PROPOSTA', 'CARTAZES', 'PANFLETOS', 'BANNER', 'CANETA', 'CAMISA', 'BLOCO', 'OUTROS', 'EXCLUIDO'], 'integer'],
            [['ITENS_OUTROS'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'PRODUTO' => 'Produto',
            'PROPOSTA' => 'Proposta',
            'CARTAZES' => 'Cartazes',
            'PANFLETOS' => 'Panfletos',
            'BANNER' => 'Banner',
            'CANETA' => 'Caneta',
            'CAMISA' => 'Camisa',
            'BLOCO' => 'Bloco',
            'OUTROS' => 'Outros',
            'ITENS_OUTROS' => 'Itens  Outros',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
