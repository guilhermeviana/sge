<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ponto_funcionario".
 *
 * @property int $REGISTRO
 * @property string $USUARIO
 * @property string $DATA
 * @property string $ENTRADA
 * @property string $SAIDA_ALMOCO
 * @property string $ENTRADA_ALMOCO
 * @property string $SAIDA
 * @property int $ABONO
 * @property int $ABONO_ENTRADA
 * @property int $ABONO_SAIDA_ALMOCO
 * @property int $ABONO_ENTRADA_ALMOCO
 * @property int $ABONO_SAIDA
 * @property int $FERIAS
 * @property int $FALTA
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class PontoFuncionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ponto_funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA', 'ENTRADA', 'SAIDA_ALMOCO', 'ENTRADA_ALMOCO', 'SAIDA'], 'safe'],
            [['ABONO', 'ABONO_ENTRADA', 'ABONO_SAIDA_ALMOCO', 'ABONO_ENTRADA_ALMOCO', 'ABONO_SAIDA', 'FERIAS', 'FALTA', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
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
            'USUARIO' => 'Usuario',
            'DATA' => 'Data',
            'ENTRADA' => 'Entrada',
            'SAIDA_ALMOCO' => 'Saida  Almoco',
            'ENTRADA_ALMOCO' => 'Entrada  Almoco',
            'SAIDA' => 'Saida',
            'ABONO' => 'Abono',
            'ABONO_ENTRADA' => 'Abono  Entrada',
            'ABONO_SAIDA_ALMOCO' => 'Abono  Saida  Almoco',
            'ABONO_ENTRADA_ALMOCO' => 'Abono  Entrada  Almoco',
            'ABONO_SAIDA' => 'Abono  Saida',
            'FERIAS' => 'Ferias',
            'FALTA' => 'Falta',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
