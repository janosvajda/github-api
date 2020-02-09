<?php


namespace Github\Api;

/**
 * Creating, deleting and listing authorizations.
 *
 * @link   http://developer.github.com/v3/oauth_authorizations/
 *
 * @author Evgeniy Guseletov <d46k16@gmail.com>
 */
class Authorizations extends AbstractApi
{
    /**
     * List all authorizations.
     *
     * @return array
     */
    public function all()
    {
        return $this->get('/authorizations');
    }

    /**
     * Show a single authorization.
     *
     * @param string $clientId
     *
     * @return array
     */
    public function show($clientId)
    {
        return $this->get('/authorizations/'.rawurlencode($clientId));
    }

    /**
     * Create an authorization.
     *
     * @param array $params
     * @param null  $OTPCode
     *
     * @return array
     */
    public function create(array $params, $OTPCode = null)
    {
        $headers = null === $OTPCode ? [] : ['X-GitHub-OTP' => $OTPCode];

        return $this->post('/authorizations', $params, $headers);
    }

}
