using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_04_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente contaDaGrabriela = new ContaCorrente();
            contaDaGrabriela.titular = "Gabriela";
            contaDaGrabriela.agencia = 863;
            contaDaGrabriela.numero = 863452;


            ContaCorrente contaDoBruno = new ContaCorrente();
            contaDoBruno.titular = "Bruno";
            contaDoBruno.agencia = 863;
            contaDoBruno.numero = 863453;

            Console.WriteLine(contaDaGrabriela.ToString());
            bool resultadoSaque = contaDaGrabriela.Sacar(123);
            Console.WriteLine(contaDaGrabriela.ToString());
            Console.WriteLine(resultadoSaque);

            contaDaGrabriela.Depositar(15);
            Console.WriteLine(contaDaGrabriela.ToString());

            bool resultadoTransferencia = contaDaGrabriela.Transferir(235, contaDoBruno);
            Console.WriteLine("\n\n\n\n\n");
            Console.WriteLine(contaDaGrabriela.ToString());
            Console.WriteLine("-----------------------------------------------------");
            Console.WriteLine(contaDoBruno.ToString());

            Console.WriteLine("Resultado da transferência: " + resultadoTransferencia);


            Console.ReadLine();
        }
    }
}
