<?php

namespace App\Models;

final class TokenModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $refresh_token;
    /**
     * @var string
     */
    private $expired_at;
    /**
     * @var int
     */
    private $usuarios_id;
    /**
     * @var string
     */
    private $usuarios_name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): TokenModel {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string {
        return $this->token;
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefresh_token(): string
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     * @return self
     */
    public function setRefresh_token(string $refresh_token): self
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpired_at(): TokenModel
    {
        return $this->expired_at;
    }

    /**
     * @param string $expired_at
     * @return self
     */
    public function setExpired_at(string $expired_at): self
    {
        $this->expired_at = $expired_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsuarios_id(): int
    {
        return $this->usuarios_id;
    }

    /**
     * @param int $usuarios_id
     * @return self
     */
    public function setUsuarios_id(int $usuarios_id): self
    {
        $this->usuarios_id = $usuarios_id;
        return $this;
    }

    public function getUsuarios_Name(): string
    {
        return $this->usuarios_name;
    }
    public function setUsuarios_Name(string $usuarios_name): self
    {
        $this->usuarios_name = $usuarios_name;
        return $this;
    }
}
