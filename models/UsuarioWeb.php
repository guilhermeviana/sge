<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_web".
 *
 * @property int $REGISTRO
 * @property int $GERENTE_GERAL
 * @property int $GERENTE_COMERCIAL
 * @property int $AGENCIADOR
 * @property int $CAPTADOR
 * @property int $CORRETOR
 * @property int $REGIONAL
 * @property string $USUARIO
 * @property string $SENHA
 * @property int $PERMISSAO
 * @property string $USUARIO_SCE
 * @property int $SOLICITA_ALTERACAO_SENHA
 * @property string $EMAIL_TOKEN
 * @property int $USAR_TOKEN_SMS
 * @property string $TELEFONE_TOKEN_SMS
 */
class UsuarioWeb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario_web';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GERENTE_GERAL', 'GERENTE_COMERCIAL', 'AGENCIADOR', 'CAPTADOR', 'CORRETOR', 'REGIONAL', 'PERMISSAO', 'SOLICITA_ALTERACAO_SENHA', 'USAR_TOKEN_SMS'], 'integer'],
            [['USUARIO', 'USUARIO_SCE'], 'string', 'max' => 50],
            [['SENHA'], 'string', 'max' => 20],
            [['EMAIL_TOKEN'], 'string', 'max' => 255],
            [['TELEFONE_TOKEN_SMS'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'GERENTE_GERAL' => 'Gerente  Geral',
            'GERENTE_COMERCIAL' => 'Gerente  Comercial',
            'AGENCIADOR' => 'Agenciador',
            'CAPTADOR' => 'Captador',
            'CORRETOR' => 'Corretor',
            'REGIONAL' => 'Regional',
            'USUARIO' => 'Usuario',
            'SENHA' => 'Senha',
            'PERMISSAO' => 'Permissao',
            'USUARIO_SCE' => 'Usuario  Sce',
            'SOLICITA_ALTERACAO_SENHA' => 'Solicita  Alteracao  Senha',
            'EMAIL_TOKEN' => 'Email  Token',
            'USAR_TOKEN_SMS' => 'Usar  Token  Sms',
            'TELEFONE_TOKEN_SMS' => 'Telefone  Token  Sms',
        ];
    }
}
