<?php

namespace Jgsouza\Icarus\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    protected $table = 'users';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    // Oculta os campos quando o model for convertido em array ou JSON
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * Define os tipos de conversão automática para atributos.
     * 
     * O campo 'email_verified_at' será automaticamente convertido
     * para uma instância de Carbon (biblioteca de datas do Laravel)
     * quando acessado, permitindo uso de métodos como:
     * 
     * $user->email_verified_at->format('d/m/Y H:i')
     * 
     * Isso facilita a manipulação de datas na aplicação.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Retorna o identificador único que será armazenado no token JWT.
     * Normalmente é o id do usuário
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // Retorna claims personalizados para incluir no JWT.
    public function getJWTCustomClaims()
    {
        return [];
    }
}