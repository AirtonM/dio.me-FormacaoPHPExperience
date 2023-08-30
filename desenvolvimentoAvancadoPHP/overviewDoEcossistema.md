#### PHP Avançado
# **Overview sobre o ecossistema como um todo**

## Objetivos da Aula
1. Composer para manipulação de dependências
2. PHPUnit para manipulação de testes unitários
3. PSRs para padronização de código
4. Frameworks e microframeworks

## Requisitos Básicos
- PHP >= 7.2
- Git
- Conta no GitHub
- IDE Preferida

## **Parte 1: Composer**

### Organização
Não reinvente a rota, utilize bibliotecas especialistas, se preocupe única e exclusivamente com as funcionalidades do seu projeto, nada mais de **includes** e **requires** em excesso e desnecessários.

### Começando **(Getting Started)**
A instalação do composer é uma das mais simples de todas, todo o gerenciador está contido em um único arquivo **.phar** (executável PHP, análogo ao .jar).

Pode ser colocado no **PATH** do seu S.O. ou utilizado como script **PHP**.

[**Download**](https://getcomposer.org/download/)

### Mãos a obra **(Hands-on)**
Para compreender o funcionamento básido do composer, desenvolva uma **biblioteca** especialista na busca do endereço, utilizando como único input o CEP do endereço desejado.

Ao final, disponibilize **publicamente** no [**Packagist**](https://packagist.org/)