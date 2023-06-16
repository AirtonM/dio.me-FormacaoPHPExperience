<?php

    declare(strict_types=1);

    class Blog
    {
        /**
         * @var PDO
         */
        private $conexao;

        public function __construct()
        {
            try {
                $this -> conexao = new PDO('mysql:host=127.0.0.1;dbname=blog','root','');
            } catch (Exception $e){
                echo $e->getMessage();
                die();
            }
        }

        public function list():array
        {
            $sql = 'select * from posts';
            
            $posts = [];

            foreach ($this->conexao->query($sql) as $key => $value){
                array_push($posts, $value);
            }   
            return $posts;
        }
        public function insert(string $conteudo):int
        {
            $sql = 'insert into posts(conteudo) values(?)';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $conteudo);
            $prepare->execute();

            return $prepare->rowCount();
        }
        public function update(string $conteudo, int $id):int
        {
            $sql = 'update posts set conteudo = ? where id = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $conteudo);
            $prepare->bindParam(2, $id);

            $prepare->execute();

            return $prepare->rowCount();
        }
        public function delete(int $id):int
        {
            $sql = 'delete from posts where id = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1,$id);
            $prepare->execute();

            return $prepare->rowCount();
        }
    }