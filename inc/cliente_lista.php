<?php

$clientes = [
                new Clientes\Types\ClientePFType(['nome' => 'Fernando Pontes', 'data_nascimento' => '01/01/1984', 'email' => 'fernandopontes@outlook.com',
                    'cpf' => '001.949.040-33', 'telefone' => '(99) 1234-5678', 'celular' => '(99) 93933-9495',
                    'endereco' => 'Rua Paulo Afonso', 'numero' => '510', 'bairro' => 'Jardim São Luis',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 5, 'endereco_cobranca' => ['endereco' => 'Rua Paulo Afonso',
                    'numero' => '510', 'bairro' => 'Jardim São Luis', 'cidade' => 'Imperatriz', 'estado' => 'MA']]),

                new Clientes\Types\ClientePFType(['nome' => 'Paulo Ricardo', 'data_nascimento' => '03/02/1985', 'email' => 'pauloricardo@outlook.com',
                    'cpf' => '101.939.240-33', 'telefone' => '(99) 2342-3234', 'celular' => '(99) 93534-3434',
                    'endereco' => 'Rua Joao Paulo', 'numero' => '43', 'bairro' => 'Rodoviário',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 4, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePJType(['nome' => 'Israel Felipe', 'data_nascimento' => '13/04/1995', 'email' => 'israelfelipe@outlook.com',
                    'cnpj' => '111.933.340/0001-89', 'telefone' => '(99) 2142-3234', 'celular' => '(99) 93534-3434',
                    'endereco' => 'Rua Joao Lisboa', 'numero' => '456', 'bairro' => 'Entroncamento',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 3, 'endereco_cobranca' => ['endereco' => 'Rua Paulo Afonso',
                        'numero' => '510', 'bairro' => 'Jardim São Luis', 'cidade' => 'Imperatriz', 'estado' => 'MA']]),

                new Clientes\Types\ClientePJType(['nome' => 'Ireman Alves', 'data_nascimento' => '30/09/1960', 'email' => 'iremanalves@outlook.com',
                    'cnpj' => '131.934.350/0001-18', 'telefone' => '(99) 2142-3234', 'celular' => '(99) 93534-3434',
                    'endereco' => 'Rua Joao Lisboa', 'numero' => '456', 'bairro' => 'Entroncamento',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 4, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePFType(['nome' => 'Aliene Silva', 'data_nascimento' => '20/08/1970', 'email' => 'alienepontes@outlook.com',
                    'cpf' => '531.934.350-44', 'telefone' => '(99) 2142-3234', 'celular' => '(99) 93534-3434',
                    'endereco' => 'Rua Sergipe', 'numero' => '78', 'bairro' => 'Bacurí',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 2, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePJType(['nome' => 'Henrique Silva', 'data_nascimento' => '24/08/1970', 'email' => 'henrique@outlook.com',
                    'cnpj' => '531.934.350/0001-90', 'telefone' => '(99) 2142-3234', 'celular' => '(99) 93534-3434',
                    'endereco' => 'Rua Sergipe', 'numero' => '78', 'bairro' => 'Bacurí',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 5, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePFType(['nome' => 'Rafael Silva', 'data_nascimento' => '10/08/1980', 'email' => 'rafaelsilva@outlook.com',
                    'cpf' => '541.934.350-44', 'telefone' => '(99) 3466-3234', 'celular' => '(99) 96785-3434',
                    'endereco' => 'Rua Tupinambá', 'numero' => '56', 'bairro' => 'Centro',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 1, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePJType(['nome' => 'José Carvalho', 'data_nascimento' => '07/08/1980', 'email' => 'josecarvalho@outlook.com',
                    'cnpj' => '541.934.350/0001-65', 'telefone' => '(99) 3466-3234', 'celular' => '(99) 96785-3434',
                    'endereco' => 'Avenida Dorgival', 'numero' => '88', 'bairro' => 'Santa Rita',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 3, 'endereco_cobranca' => ['endereco' => 'Rua Paulo Afonso',
                        'numero' => '510', 'bairro' => 'Jardim São Luis', 'cidade' => 'Imperatriz', 'estado' => 'MA']]),

                new Clientes\Types\ClientePJType(['nome' => 'Paulo Robério', 'data_nascimento' => '15/08/1990', 'email' => 'pauloroberio@outlook.com',
                    'cnpj' => '541.934.350/0001-87', 'telefone' => '(99) 3466-3234', 'celular' => '(99) 96785-3434',
                    'endereco' => 'Avenida Getúlio Vargas', 'numero' => '44', 'bairro' => 'Centro',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 4, 'endereco_cobranca' => null]),

                new Clientes\Types\ClientePFType(['nome' => 'Laecio Silva', 'data_nascimento' => '19/08/1985', 'email' => 'laeciosilva@outlook.com',
                    'cpf' => '345.786.423-44', 'telefone' => '(99) 7856-3234', 'celular' => '(99) 96785-2342',
                    'endereco' => 'Rua Bahia', 'numero' => '44', 'bairro' => 'Três Poderes',
                    'cidade' => 'Imperatriz', 'estado' => 'MA', 'pontuacao' => 2, 'endereco_cobranca' => null])
            ];