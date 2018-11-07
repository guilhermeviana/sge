<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_venc".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property int $EXIGE_DIA
 * @property int $LIMITE
 * @property int $TRATA_DIA_UTIL
 * @property int $TRATA_CHAMADA
 * @property int $EXCLUIDO
 */
class TipoVenc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_venc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXIGE_DIA', 'LIMITE', 'TRATA_DIA_UTIL', 'TRATA_CHAMADA', 'EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DESCRICAO' => 'Descricao',
            'EXIGE_DIA' => 'Exige  Dia',
            'LIMITE' => 'Limite',
            'TRATA_DIA_UTIL' => 'Trata  Dia  Util',
            'TRATA_CHAMADA' => 'Trata  Chamada',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
