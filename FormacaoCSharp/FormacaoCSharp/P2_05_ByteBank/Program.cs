using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_05_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            //Cliente gabriela = new Cliente();

            //gabriela.nome = "Gabriela";
            //gabriela.profissao = "Developer C#";
            //gabriela.nome = "013.636.885-39";

            ContaCorrente conta = new ContaCorrente();
            //conta.titular = gabriela;
            conta.titular = new Cliente();
            conta.titular.nome = "Gabriela";
            conta.titular.profissao = "Developer C#";
            conta.titular.nome = "013.636.885-39";
            conta.saldo = 3000;
            conta.numero = 846996;
            conta.agencia = 846;

            //conta.titular.nome = "Gabriela Rocha";

            //Console.WriteLine(gabriela.nome);
            Console.WriteLine(conta.titular.nome);

            Console.ReadLine();
        }
    }
}
