<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonificacao_extra".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property string $HORA
 * @property string $NOME
 * @property string $CPF
 * @property string $TELEFONE
 * @property int $PRODUTO
 * @property double $VALOR
 * @property int $PARCELAS
 * @property double $VALOR_PARCELAS
 * @property string $OBSERVACAO
 * @property double $PORCENTAGEM_BONUS
 * @property double $VALOR_BONUS
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property string $DATAAT
 * @property string $USUARIOAT
 * @property int $EXCLUIDO
 */
class BonificacaoExtra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonificacao_extra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA', 'HORA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['PRODUTO', 'PARCELAS', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_PARCELAS', 'PORCENTAGEM_BONUS', 'VALOR_BONUS'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['CPF'], 'string', 'max' => 14],
            [['TELEFONE'], 'string', 'max' => 12],
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
            'HORA' => 'Hora',
            'NOME' => 'Nome',
            'CPF' => 'Cpf',
            'TELEFONE' => 'Telefone',
            'PRODUTO' => 'Produto',
            'VALOR' => 'Valor',
            'PARCELAS' => 'Parcelas',
            'VALOR_PARCELAS' => 'Valor  Parcelas',
            'OBSERVACAO' => 'Observacao',
            'PORCENTAGEM_BONUS' => 'Porcentagem  Bonus',
            'VALOR_BONUS' => 'Valor  Bonus',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'DATAAT' => 'Dataat',
            'USUARIOAT' => 'Usuarioat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
