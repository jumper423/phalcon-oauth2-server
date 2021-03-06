<?php

namespace Phalcon\OAuth2\Server\Models;

/**
 * Class AuthCodeScope
 * @package Phalcon\OAuth2\Server\Models
 */
class AuthCodeScope extends OAuth
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $auth_code_id;

    /**
     *
     * @var string
     */
    public $scope_id;

    /**
     *
     * @var integer
     */
    public $created_at;

    /**
     *
     * @var integer
     */
    public $updated_at;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AuthCodeScope[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AuthCodeScope
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('auth_code_id', AuthCode::class, 'id');
        $this->belongsTo('scope_id', Scope::class, 'id');
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth_auth_code_scopes';
    }

}
