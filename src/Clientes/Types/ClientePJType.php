<?php

namespace Clientes\Types;

use Clientes\ClienteAbstract;

class ClientePJType extends ClienteAbstract {

    public $cnpj;

    public function __construct($dados_cliente)
    {
        parent::__construct($dados_cliente);
        
        if(is_array($dados_cliente) && count($dados_cliente) > 0)
        {
            $this->cnpj              =   $dados_cliente['cnpj'];
        }
        else {
            throw new Exception('Não há clientes');
        }

        $this->tipo_cliente = 'PJ';
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getTipoCliente()
    {
        return $this->tipo_cliente;
    }
} 