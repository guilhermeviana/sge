<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_taxa_deb_conta".
 *
 * @property int $REGISTRO
 * @property int $EMPRESA
 * @property int $AGENCIADOR
 * @property int $CAPTADOR
 * @property int $CORRETOR
 * @property double $PERCENTUAL_AGENCIADOR
 * @property double $PERCENTUAL_CAPTADOR
 * @property double $PERCENTUAL_CORRETOR
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class TabelaComissaoTaxaDebConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_taxa_deb_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESA', 'AGENCIADOR', 'CAPTADOR', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['PERCENTUAL_AGENCIADOR', 'PERCENTUAL_CAPTADOR', 'PERCENTUAL_CORRETOR'], 'number'],
            [['DATA_REGISTRO'], 'safe'],
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
            'EMPRESA' => 'Empresa',
            'AGENCIADOR' => 'Agenciador',
            'CAPTADOR' => 'Captador',
            'CORRETOR' => 'Corretor',
            'PERCENTUAL_AGENCIADOR' => 'Percentual  Agenciador',
            'PERCENTUAL_CAPTADOR' => 'Percentual  Captador',
            'PERCENTUAL_CORRETOR' => 'Percentual  Corretor',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
