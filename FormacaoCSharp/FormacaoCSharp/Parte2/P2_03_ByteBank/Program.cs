using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_03_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente contaDaGrabriela = new ContaCorrente();
            contaDaGrabriela.titular = "Gabriela";
            contaDaGrabriela.agencia = 863;
            contaDaGrabriela.numero = 863452;

            ContaCorrente contaDaGrabrielaCosta = new ContaCorrente();
            contaDaGrabrielaCosta.titular = "Gabriela";
            contaDaGrabrielaCosta.agencia = 863;
            contaDaGrabrielaCosta.numero = 863452;

            Console.WriteLine("Igualdade de tipo de referência: " + (contaDaGrabriela == contaDaGrabrielaCosta));

            int idade = 27;
            int idadeMaisUmaVez = 27;

            Console.WriteLine("Igualdade de tipo de valor: " + (idade == idadeMaisUmaVez));

            contaDaGrabriela = contaDaGrabrielaCosta;
            Console.WriteLine("Igualdade de tipo de referência: " + (contaDaGrabriela == contaDaGrabrielaCosta));

            contaDaGrabriela.saldo = 300;
            Console.WriteLine(contaDaGrabriela.saldo);
            Console.WriteLine(contaDaGrabrielaCosta.saldo);

            Console.ReadLine();
        }
    }
}
