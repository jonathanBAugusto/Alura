using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CS_3_CriandoVariaveisPontoFlutuante
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando Projeto 3 - Criando Variaveis com Ponto Flutuante!");

            double salario;
            salario = 1200.70;

            Console.WriteLine(salario);

            salario = 15 / 2.0;
            Console.WriteLine(salario);

            salario = 5 / 3;
            Console.WriteLine("5 / 3 = " + salario);

            salario = 5.0 / 3;
            Console.WriteLine("5.0 / 3 = " + salario);

            Console.WriteLine("Press ENTER or RETURN to exit...");
            Console.ReadLine();
        }
    }
}
