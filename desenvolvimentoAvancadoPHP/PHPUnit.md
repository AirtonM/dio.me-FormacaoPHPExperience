###### PHP Avançado
# PHPUnit

## Tipos de testes
Basicamente existem três tipos de testes.
- UI + Caro + Lento
- Service +- Caro +-Rápido
- Unit - Caro + Rápido

## Isso é TDD?
Sim e não, simplesmente utilizar o PHPUnit não significa que o desenvolvimento é orientado à testes (**T**ests **D**riven **D**evelopment).
Mas já é um passo na direção certa, com os testes corretos.

## Além do básico
Nada mais de depender ***únicamente*** do **print_r(), var_dump(), dd(), breakpoints**, etc...
Tenha a tranquilidade e segurança de fazer qualquer alteração no seu sistema, sem quebrar nada, por maior e mais complexo que ele seja.

## Seja Preguiçoso
Um sistema que nasce sem considerear os testes unitários, o torna de mais difícil manutenção e mais propeso à "surpresas.
Ao mesmo tempo que começar testando tudo, faz com que o sistema seja cada vez menos instável, e otimizado pos queremos testes mais simples.

## Hands-on
Volte ao nosso projeto, e crie testes unitários ***onde for possível***.
Ao final, gere um relatório de **code covered**, publique a atualização e libere um ***novo release*** com o códio melhorado.

## Getting Started
Dê o comando para realizar instalação:
> composer require --dev phpunit/phpunit

Para confirmar se foi instalado corretamente, dê o comando:
> vendor/bin/phpunit --version