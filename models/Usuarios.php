<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property string $USUARIO
 * @property string $PASSWORD
 * @property string $NOVA
 * @property int $GRUPO
 * @property string $PERMISSAO
 * @property string $PERMISSAO_SYS
 * @property string $PARCEIROS
 * @property string $PRODUTOS
 * @property int $EQUIPE
 * @property int $FILIAL
 * @property int $NIVEL_RESTRICAO_CORRETOR
 * @property int $CAPTADOR
 * @property int $NIVEL_RESTRICAO_CAPTADOR
 * @property int $RECEBE_ALTERTAS_FRAUDE
 * @property int $BLOQUEADO
 * @property string $LIMITE_LIBERACAO
 * @property int $SOLICITA_ALTERACAO_SENHA
 * @property int $SENHA_EXPIRA
 * @property int $PERMITE_ACESSO_SIMULTANEO
 * @property int $ACESSA_MENSAGENS_INTERNAS
 * @property string $DATA_ALTERACAO_SENHA
 * @property int $VISUALIZA_SOMENTE_CLIENTES_EQUIPE
 * @property string $IMPRESSAO_DIGITAL
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USUARIO'], 'required'],
            [['GRUPO', 'EQUIPE', 'FILIAL', 'NIVEL_RESTRICAO_CORRETOR', 'CAPTADOR', 'NIVEL_RESTRICAO_CAPTADOR', 'RECEBE_ALTERTAS_FRAUDE', 'BLOQUEADO', 'SOLICITA_ALTERACAO_SENHA', 'SENHA_EXPIRA', 'PERMITE_ACESSO_SIMULTANEO', 'ACESSA_MENSAGENS_INTERNAS', 'VISUALIZA_SOMENTE_CLIENTES_EQUIPE'], 'integer'],
            [['PERMISSAO', 'PERMISSAO_SYS', 'IMPRESSAO_DIGITAL'], 'string'],
            [['LIMITE_LIBERACAO', 'DATA_ALTERACAO_SENHA'], 'safe'],
            [['USUARIO'], 'string', 'max' => 16],
            [['PASSWORD'], 'string', 'max' => 128],
            [['NOVA'], 'string', 'max' => 40],
            [['PARCEIROS', 'PRODUTOS'], 'string', 'max' => 255],
            [['USUARIO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USUARIO' => 'Usuario',
            'PASSWORD' => 'Password',
            'NOVA' => 'Nova',
            'GRUPO' => 'Grupo',
            'PERMISSAO' => 'Permissao',
            'PERMISSAO_SYS' => 'Permissao  Sys',
            'PARCEIROS' => 'Parceiros',
            'PRODUTOS' => 'Produtos',
            'EQUIPE' => 'Equipe',
            'FILIAL' => 'Filial',
            'NIVEL_RESTRICAO_CORRETOR' => 'Nivel  Restricao  Corretor',
            'CAPTADOR' => 'Captador',
            'NIVEL_RESTRICAO_CAPTADOR' => 'Nivel  Restricao  Captador',
            'RECEBE_ALTERTAS_FRAUDE' => 'Recebe  Altertas  Fraude',
            'BLOQUEADO' => 'Bloqueado',
            'LIMITE_LIBERACAO' => 'Limite  Liberacao',
            'SOLICITA_ALTERACAO_SENHA' => 'Solicita  Alteracao  Senha',
            'SENHA_EXPIRA' => 'Senha  Expira',
            'PERMITE_ACESSO_SIMULTANEO' => 'Permite  Acesso  Simultaneo',
            'ACESSA_MENSAGENS_INTERNAS' => 'Acessa  Mensagens  Internas',
            'DATA_ALTERACAO_SENHA' => 'Data  Alteracao  Senha',
            'VISUALIZA_SOMENTE_CLIENTES_EQUIPE' => 'Visualiza  Somente  Clientes  Equipe',
            'IMPRESSAO_DIGITAL' => 'Impressao  Digital',
        ];
    }
}
