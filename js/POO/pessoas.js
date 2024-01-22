class Pessoa {
    nome;
    idade;
    anoNascimento;

    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    descrever() {
        console.log(`Meu nome ${nome} e a minha idade é ${idade}`);
    }
}

function compararPessoa(p1, p2) {
    if (p1.idade > p2.idade) {
        console.log(`${p1.nome} é mais velha que ${p2.nome} `)
    } else if (p1.idade < p2.idade) {
        console.log(`${p2.nome} é mais velha que ${p1.nome} `)
    } else {
        console.log(`${p1.nome} e ${p2.nome} tem a mesma idade`)
    }
}

const riso = new Pessoa('risonaldo', 31)
const maciel = new Pessoa('maciel', 30)

compararPessoa(riso, maciel)