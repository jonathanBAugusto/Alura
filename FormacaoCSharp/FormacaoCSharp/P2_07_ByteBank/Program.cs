using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_07_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);
            ContaCorrente conta = new ContaCorrente(numero: 86749875, agencia: 849);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);


            new ContaCorrente(numero: 86749875, agencia: 849);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);

            new ContaCorrente(numero: 86749875, agencia: 849);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);

            new ContaCorrente(numero: 86749875, agencia: 849);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);
            Console.ReadKey();
        }
    }
}
