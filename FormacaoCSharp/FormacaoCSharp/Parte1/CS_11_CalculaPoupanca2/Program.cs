using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CS_11_CalculaPoupanca2
{
    class Program
    {
        private const double TAX = 0.0036;
        static void Main(string[] args)
        {
            Console.WriteLine("Executandon o projeto 11 - Calcula Poupança 2");

            double valorInvestido = 1000;

            for (int i = 1; i < 12; i++)
            {
                valorInvestido += valorInvestido * TAX;
                Console.WriteLine("Após {0} {1}, você terá R$ {2}", i, i == 1 ? "mês" : "meses", valorInvestido.ToString("n2")); ;
            }


            Console.ReadLine();
        }
    }
}
