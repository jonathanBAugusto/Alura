﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P2_06_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando o Projeto 06");

            ContaCorrente conta = new ContaCorrente();
            conta.saldo = -10;
            Console.WriteLine(conta.saldo);

            Console.ReadLine();
        }
    }
}
