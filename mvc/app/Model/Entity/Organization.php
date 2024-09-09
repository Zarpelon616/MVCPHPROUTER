<?php

namespace App\Model\Entity;

class Organization
{
    /**
     * ID da organização.
     * @var integer
     */
    public $id = 1;
    
    /**
     * Nome da organização.
     * @var string
     */
    public $name = 'SC- VIDEIRA';
    
    /**
     * Site da organização.
     * @var string
     */
    public $site = 'https://videira.atende.net/';
    
    /**
     * Descrição da organização/pessoa.
     * @var string
     */
    public $description ='Rotas maravilhosas em Videira-SC';
}
