<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;
/**
 * Description of Telefone
 *
 * @author noblind
 */
class Telefone extends Model{
    protected $table = 'telefones';
    protected $fillable = [
        'descricao',
        'apelido',
        'codepais',
        'ddd',
        'prefixo',
        'sufixo'
        
    ];
    
    public function getNumeroAttribute(){
        
        return "{$this->codepais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}
