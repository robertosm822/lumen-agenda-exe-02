<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;
/**
 * Description of Pessoa
 *
 * @author noblind
 */
class Pessoa extends Model{
    protected $table = 'pessoas';
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
        
    ];
    
    public function telefones(){
        return $this->hasMany(Telefone::class);
    }
}
