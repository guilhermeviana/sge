<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_quadro_horario".
 *
 * @property int $REGISTRO
 * @property int $REGISTRO_QUADRO
 * @property int $DIA_SEMANA
 * @property string $ENTRADA_ENTRADA
 * @property string $SAIDA_ALMOCO
 * @property string $ENTRADA_ALMOCO
 * @property string $SAIDA_EMPRESA
 * @property int $EXCLUIDO
 */
class ItensQuadroHorario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_quadro_horario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_QUADRO', 'DIA_SEMANA', 'EXCLUIDO'], 'integer'],
            [['ENTRADA_ENTRADA', 'SAIDA_ALMOCO', 'ENTRADA_ALMOCO', 'SAIDA_EMPRESA'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'REGISTRO_QUADRO' => 'Registro  Quadro',
            'DIA_SEMANA' => 'Dia  Semana',
            'ENTRADA_ENTRADA' => 'Entrada  Entrada',
            'SAIDA_ALMOCO' => 'Saida  Almoco',
            'ENTRADA_ALMOCO' => 'Entrada  Almoco',
            'SAIDA_EMPRESA' => 'Saida  Empresa',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
