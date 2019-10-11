using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CS_10_CalculaPoupanca
{
    class Program
    {
        private const double TAX = 0.01;

        static void Main(string[] args)
        {
            Console.WriteLine("Executando projeto 10 - Calcula poupança");

            double valorInvestido = 1000;

            int contadorMes = 1;

            while (contadorMes <= 12)
            {
                valorInvestido += valorInvestido * TAX;
                Console.WriteLine("Após {0} {1}, você terá R$ {2}", contadorMes, contadorMes == 1 ? "mês" : "meses", valorInvestido.ToString("n2"));
                contadorMes++;
            }

            Console.ReadLine();
        }
    }
}
