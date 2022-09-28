<?php

class verificarCPF extends Exception
{

    private $cpf;

    public function getCPF(){return $this->cpf;}
    public function setCPF($cpf){$this->cpf=$cpf;}

    public function CPF(string $cpf)
    {
        try
        {
            if(!$this->cpf)
            {throw new Exception("<strong>CPF Inválido:</strong> Preencha o campo CFP!<br>");}
            else if(strlen($this->cpf) < 11)
            {throw new verificarCPF("<strong>CPF Inválido:</strong> Tem menos de 11 digitos!<br>");}
            else if(strlen($this->cpf) > 11)
            {throw new verificarCPF("<strong>CPF Inválido:</strong> Tem mais de 11 digitos!<br>");}
            else
            {echo "CPF aceitou";}
        }
        catch(verificarCPF $e)
        {echo "Problema no CPF: ".$e->getMessage()."<br>";}
        catch(Exception $e)
        {echo $e->getMessage()."<br>";}
    }

}

$cpf = new verificarCPF();

$cpf->setCPF("12312312312");
$cpf->CPF($cpf);