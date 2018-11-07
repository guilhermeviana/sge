<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_seguro_veiculo".
 *
 * @property int $REGISTRO
 * @property int $TIPO_VEICULO
 * @property int $TIPO_COTACAO
 * @property int $ANO_FABRICACAO
 * @property int $ANO_MODELO
 * @property int $ZERO_KM
 * @property string $DATA_SAIDA_CON
 * @property string $ODOMETRO
 * @property int $FABRICANTE
 * @property int $MODELO
 * @property int $CHASSI_REMARCADO
 * @property int $CATEGORIA
 * @property int $VALOR_INDENIZACAO
 * @property int $FATOR_AJUSTE
 * @property string $VALOR
 * @property string $CEP_PERNOITE
 * @property string $CONDUTOR
 * @property string $NASCIMENTO_CONDUTOR
 * @property int $MENOR_26ANOS
 * @property int $FILHOS_CONDUTOR
 * @property string $SEXO
 * @property int $ESTADO_CIVIL
 * @property int $TEMPO_HABILITACAO
 * @property string $PROFISSAO
 * @property int $USO_COMERCIAL
 * @property int $GARAGEM
 * @property int $GARAGEM_TRABALHO
 * @property int $GARAGEM_RESIDENCIA
 * @property int $TIPO_RESIDENCIA
 * @property int $RELACAO_PROPRIETARIO
 * @property int $TIPO_FRANQUIA
 * @property int $SEGURO_FRANQUIA
 * @property int $DANOS_MATERIAIS
 * @property int $DANOS_CORPORAIS
 * @property int $DANOS_MORAIS
 * @property string $MORTE_OCUPANTE
 * @property string $INVALIDEZ_OCUPANTE
 * @property int $ASSISTENCIA_AUTO
 * @property int $ASSISTENCIA_BASICA
 * @property int $REBOQUE
 * @property int $AUTOMAIS_CASA
 * @property int $VIDROS
 * @property int $CARRO_RESERVA
 * @property int $RASTREADOR_LOCALIZADOR
 * @property int $BLOQUEADOR
 * @property int $ANTIFURTO
 */
class WebSeguroVeiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_seguro_veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_VEICULO', 'TIPO_COTACAO', 'ANO_FABRICACAO', 'ANO_MODELO', 'ZERO_KM', 'FABRICANTE', 'MODELO', 'CHASSI_REMARCADO', 'CATEGORIA', 'VALOR_INDENIZACAO', 'FATOR_AJUSTE', 'MENOR_26ANOS', 'FILHOS_CONDUTOR', 'ESTADO_CIVIL', 'TEMPO_HABILITACAO', 'USO_COMERCIAL', 'GARAGEM', 'GARAGEM_TRABALHO', 'GARAGEM_RESIDENCIA', 'TIPO_RESIDENCIA', 'RELACAO_PROPRIETARIO', 'TIPO_FRANQUIA', 'SEGURO_FRANQUIA', 'DANOS_MATERIAIS', 'DANOS_CORPORAIS', 'DANOS_MORAIS', 'ASSISTENCIA_AUTO', 'ASSISTENCIA_BASICA', 'REBOQUE', 'AUTOMAIS_CASA', 'VIDROS', 'CARRO_RESERVA', 'RASTREADOR_LOCALIZADOR', 'BLOQUEADOR', 'ANTIFURTO'], 'integer'],
            [['DATA_SAIDA_CON', 'NASCIMENTO_CONDUTOR'], 'safe'],
            [['ODOMETRO', 'VALOR'], 'number'],
            [['CEP_PERNOITE'], 'string', 'max' => 10],
            [['CONDUTOR', 'PROFISSAO'], 'string', 'max' => 100],
            [['SEXO'], 'string', 'max' => 1],
            [['MORTE_OCUPANTE', 'INVALIDEZ_OCUPANTE'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO_VEICULO' => 'Tipo  Veiculo',
            'TIPO_COTACAO' => 'Tipo  Cotacao',
            'ANO_FABRICACAO' => 'Ano  Fabricacao',
            'ANO_MODELO' => 'Ano  Modelo',
            'ZERO_KM' => 'Zero  Km',
            'DATA_SAIDA_CON' => 'Data  Saida  Con',
            'ODOMETRO' => 'Odometro',
            'FABRICANTE' => 'Fabricante',
            'MODELO' => 'Modelo',
            'CHASSI_REMARCADO' => 'Chassi  Remarcado',
            'CATEGORIA' => 'Categoria',
            'VALOR_INDENIZACAO' => 'Valor  Indenizacao',
            'FATOR_AJUSTE' => 'Fator  Ajuste',
            'VALOR' => 'Valor',
            'CEP_PERNOITE' => 'Cep  Pernoite',
            'CONDUTOR' => 'Condutor',
            'NASCIMENTO_CONDUTOR' => 'Nascimento  Condutor',
            'MENOR_26ANOS' => 'Menor 26 Anos',
            'FILHOS_CONDUTOR' => 'Filhos  Condutor',
            'SEXO' => 'Sexo',
            'ESTADO_CIVIL' => 'Estado  Civil',
            'TEMPO_HABILITACAO' => 'Tempo  Habilitacao',
            'PROFISSAO' => 'Profissao',
            'USO_COMERCIAL' => 'Uso  Comercial',
            'GARAGEM' => 'Garagem',
            'GARAGEM_TRABALHO' => 'Garagem  Trabalho',
            'GARAGEM_RESIDENCIA' => 'Garagem  Residencia',
            'TIPO_RESIDENCIA' => 'Tipo  Residencia',
            'RELACAO_PROPRIETARIO' => 'Relacao  Proprietario',
            'TIPO_FRANQUIA' => 'Tipo  Franquia',
            'SEGURO_FRANQUIA' => 'Seguro  Franquia',
            'DANOS_MATERIAIS' => 'Danos  Materiais',
            'DANOS_CORPORAIS' => 'Danos  Corporais',
            'DANOS_MORAIS' => 'Danos  Morais',
            'MORTE_OCUPANTE' => 'Morte  Ocupante',
            'INVALIDEZ_OCUPANTE' => 'Invalidez  Ocupante',
            'ASSISTENCIA_AUTO' => 'Assistencia  Auto',
            'ASSISTENCIA_BASICA' => 'Assistencia  Basica',
            'REBOQUE' => 'Reboque',
            'AUTOMAIS_CASA' => 'Automais  Casa',
            'VIDROS' => 'Vidros',
            'CARRO_RESERVA' => 'Carro  Reserva',
            'RASTREADOR_LOCALIZADOR' => 'Rastreador  Localizador',
            'BLOQUEADOR' => 'Bloqueador',
            'ANTIFURTO' => 'Antifurto',
        ];
    }
}
