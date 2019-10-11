using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_01_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando o projeto 01");
            ContaCorrente contaGabi = new ContaCorrente();
            contaGabi.titular = "Gabriela";
            contaGabi.agencia = 863;
            contaGabi.numero = 365255;
            contaGabi.saldo = 20.36;


            Console.WriteLine(contaGabi.titular);
            Console.WriteLine("Agência: " + contaGabi.agencia);
            Console.WriteLine("Numero: " + contaGabi.numero);
            Console.WriteLine("Saldo: " + contaGabi.saldo);
        }
    }
}
