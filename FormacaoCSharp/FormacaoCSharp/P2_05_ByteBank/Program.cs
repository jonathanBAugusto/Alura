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
            Cliente gabriela = new Cliente();

            gabriela.nome = "Gabriela";
            gabriela.profissao = "Developer";
            gabriela.nome = "013.636.885-39";

            ContaCorrente conta = new ContaCorrente();
            conta.titular = gabriela;

        }
    }
}
