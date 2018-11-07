<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taxa_admin_desconto_folha".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $ATIVO
 * @property double $VALOR
 * @property string $INICIO_TAXA
 * @property string $DATA_CANCELAMENTO
 * @property int $MATRICULA
 * @property int $RUBRICA
 * @property int $GERA_CARTEIRA
 * @property int $CORRETOR
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class TaxaAdminDescontoFolha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taxa_admin_desconto_folha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'ATIVO', 'MATRICULA', 'RUBRICA', 'GERA_CARTEIRA', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['VALOR'], 'number'],
            [['INICIO_TAXA', 'DATA_CANCELAMENTO', 'DATAREGISTRO'], 'safe'],
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
            'ATIVO' => 'Ativo',
            'VALOR' => 'Valor',
            'INICIO_TAXA' => 'Inicio  Taxa',
            'DATA_CANCELAMENTO' => 'Data  Cancelamento',
            'MATRICULA' => 'Matricula',
            'RUBRICA' => 'Rubrica',
            'GERA_CARTEIRA' => 'Gera  Carteira',
            'CORRETOR' => 'Corretor',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
